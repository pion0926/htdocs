<?php 
include "../include/admin_check.php"; // 관리자 확인 (필요에 따라 주석 해제 또는 사용)
include "../include/header.php"; 
include "../include/db_connect.php"; // 데이터베이스 연결
?>

<style>
.news-section {
    max-width: 1200px;
    margin: 60px auto;
    padding: 0 20px;
}

.news-title {
    font-size: 32px;
    font-weight: 700;
    color: #1d2b59;
    margin-bottom: 20px;
}

.news-subtitle {
    font-size: 16px;
    color: #444;
    margin-bottom: 40px;
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
    gap: 30px;
}

.news-card {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    overflow: hidden;
    transition: transform 0.2s;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.news-card:hover {
    transform: translateY(-5px);
}

.news-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.news-card h3 {
    font-size: 18px;
    margin: 16px 16px 8px;
    color: #1d2b59;
}

.news-card p {
    font-size: 14px;
    color: #555;
    margin: 0 16px 16px;
    line-height: 1.5;
}

@media (max-width: 480px) {
    .news-title {
        font-size: 24px;
    }
}

/* 글쓰기 버튼 */
.boardManage {
    margin-bottom: 20px;
    text-align: right;
}

.btnWrite {
    display: inline-block;
    padding: 10px 20px; /* 크기 조정 */
    background: #2c5282;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    transition: background 0.2s;
    font-size: 14px; /* 폰트 크기 */
}

.btnWrite:hover {
    background: #2b6cb0;
}
</style>

<div id="news" class="wrap">
    <div class="subTop">
        <div class="pageGroup">
            <h2>뉴스</h2>
        </div>
        <div id="lnb">
             <a href="/web_basic/board/list.php?pagen=299">전체</a> 
            <div class="depth2">
                <ul>
                    <li class="<?php echo empty($_GET['CATENUM']) ? 'active' : ''; ?>"><a href="/web_basic/board/list.php?pagen=299" id="depthname">전체</a></li>
                    </ul>
            </div>
        </div>
    </div>
    <section id="container" class="news group_num_217">
        <div class="news-section">
            <h2 class="news-title">글로벌헬스파트너스의 최근 뉴스
                <?php if (function_exists('isAdmin') && isAdmin()): ?>
                    <div class="boardManage">
                        <a href="/web_basic/board/write_news.php" class="btnWrite">글 작성</a>
                    </div>
                <?php endif; ?>
            </h2>
            <p class="news-subtitle">글로벌헬스파트너스는 국내외 보건의료 봉사, 국제협력, 연구조사 활동을 통해 지구촌 누구도 소외되지 않는 건강한 세상을 만들어가고 있습니다.</p>

            <div class="news-grid">
                <?php
                $sql = "SELECT * FROM news WHERE is_visible = 1 ORDER BY published_at DESC LIMIT 9";
                $result = mysqli_query($conn, $sql);
                
                if ($result && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = (int)$row['id'];
                        $thumb = htmlspecialchars($row['thumbnail_path']);
                        $title = htmlspecialchars($row['title']);
                        $summary = htmlspecialchars(mb_strimwidth(strip_tags($row['summary']), 0, 100, "..."));

                        echo "
                        <div class=\"news-card\">
                            <a href=\"news_view.php?id={$id}\" style=\"text-decoration: none; color: inherit;\">
                                <img src=\"{$thumb}\" alt=\"썸네일\">
                                <h3>{$title}</h3>
                                <p>{$summary}</p>
                            </a>
                        </div>
                        ";
                    }
                } else {
                    echo "<p>등록된 뉴스가 없습니다.</p>";
                }
                ?>
            </div>
        </div>
    </section>


</div>


<?php include "../include/footer.php"; ?>