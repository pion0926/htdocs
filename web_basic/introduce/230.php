<?php
include "../include/admin_check.php";
include "../include/db_connect.php"; // DB 연결 파일

$isAdmin = isAdmin(); 

// 최신 이미지 가져오기
$sql = "SELECT image_path FROM history ORDER BY created_at DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

$imagePath = "/web_basic/img/introduce/history2.png"; // 기본 이미지
if ($row = mysqli_fetch_assoc($result)) {
    $imagePath = $row['image_path'];
}
?>

<section id="container" class="introduce group_num_230">
    <div class="contents page_230">
        <div class="contenstView">
            <div style="text-align: center; margin: 20px auto; padding: 20px; width: 100%; box-sizing: border-box;">
                <div style="max-width: 1200px; margin: 0 auto;">
                    <img src="<?= htmlspecialchars($imagePath) ?>" alt="연혁" style="width: 100%; height: auto; display: block; margin: 0;">
                </div>

                <?php if ($isAdmin): ?>
                    <form action="upload_history.php" method="post" enctype="multipart/form-data">
                        <input type="file" name="history_image" accept="image/*" required>
                        <button type="submit">upload_new_image</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
