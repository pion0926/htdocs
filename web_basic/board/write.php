<?php 
include "../include/header.php";
include "../include/admin_check.php";

// Check if user is admin
checkAdmin();

$mode = isset($_GET['mode']) ? $_GET['mode'] : 'write';
$sno = isset($_GET['sno']) ? $_GET['sno'] : 0;
$pagen = isset($_GET['pagen']) ? $_GET['pagen'] : 0;

// If editing, fetch the notice data
if ($mode === 'edit' && $sno > 0) {
    // Connect to database and fetch notice data
    $conn = new mysqli("localhost", "root", "", "web_basic");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $stmt = $conn->prepare("SELECT * FROM notices WHERE sno = ?");
    $stmt->bind_param("i", $sno);
    $stmt->execute();
    $result = $stmt->get_result();
    $notice = $result->fetch_assoc();
    $stmt->close();
    $conn->close();
}
?>

<div id="news" class="wrap">
    <div class="subTop">
        <div class="pageGroup">
            <h2>공지/뉴스</h2>
        </div>
        <div id="lnb">
            <a href="/web_basic/board/list.php?pagen=<?php echo $pagen; ?>">전체</a>
            <div class="depth2">
                <ul>
                    <li><a href="/web_basic/board/list.php?pagen=<?php echo $pagen; ?>&amp;CATENUM=0" id="depthname">전체</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section id="container" class="news group_num_217">
        <div class="contents page_<?php echo $pagen; ?>">
            <div class="boardWrap">
                <form action="/web_basic/board/save.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="mode" value="<?php echo $mode; ?>">
                    <input type="hidden" name="sno" value="<?php echo $sno; ?>">
                    <input type="hidden" name="pagen" value="<?php echo $pagen; ?>">
                    
                    <div class="writeForm">
                        <div class="formRow">
                            <label for="title">제목</label>
                            <input type="text" id="title" name="title" value="<?php echo isset($notice) ? htmlspecialchars($notice['title']) : ''; ?>" required>
                        </div>
                        <div class="formRow">
                            <label for="content">내용</label>
                            <textarea id="content" name="content" required><?php echo isset($notice) ? htmlspecialchars($notice['content']) : ''; ?></textarea>
                        </div>
                        <div class="formRow">
                            <label for="file">첨부파일</label>
                            <input type="file" id="file" name="file">
                            <?php if (isset($notice) && $notice['file_name']): ?>
                            <div class="currentFile">
                                현재 파일: <?php echo htmlspecialchars($notice['file_name']); ?>
                                <input type="hidden" name="current_file" value="<?php echo htmlspecialchars($notice['file_name']); ?>">
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="formButtons">
                            <button type="submit" class="btnSubmit">저장</button>
                            <a href="/web_basic/board/list.php?pagen=<?php echo $pagen; ?>" class="btnCancel">취소</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>

<style>
.writeForm {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.formRow {
    margin-bottom: 20px;
}

.formRow label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.formRow input[type="text"],
.formRow textarea {
    width: 100%;
    padding: 8px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.formRow textarea {
    height: 300px;
    resize: vertical;
}

.formButtons {
    text-align: center;
    margin-top: 20px;
}

.btnSubmit,
.btnCancel {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin: 0 5px;
}

.btnSubmit {
    background-color: #007bff;
    color: white;
}

.btnCancel {
    background-color: #6c757d;
    color: white;
    text-decoration: none;
}

.currentFile {
    margin-top: 5px;
    color: #666;
}
</style>

<?php include "../include/footer.php"; ?> 