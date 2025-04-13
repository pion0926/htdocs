<!DOCTYPE html>
<html lang="ko">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes">
        <meta name="description" content="글로벌헬스파트너스, 누구도 소외되지 않는 건강한 삶, 보다 나은 내일을 만들어가는 NGO">
        <meta property="og:description" content="글로벌헬스파트너스,누구도 소외되지 않는 건강한 삶, 보다 나은 내일을 만들어가는 NGO">
        <meta name="keywords" content="글로벌헬스파트너스,누구도 소외되지 않는 건강한 삶, 보다 나은 내일을 만들어가는 NGO">
        <meta property="og:site_name" content="글로벌헬스파트너스-Global Health Partners">
        <meta property="og:title" content="글로벌헬스파트너스">
        <meta property="og:url" content="https://gbhealthpartners.kr">
        <meta property="og:image" content="/web_basic/img/common/로고_가로형-한글영문(new).png">
        <meta property="og:image:width" content="400">
        <meta property="og:image:height" content="200">
        <meta property="og:type" content="website">
        <link rel="shortcut icon" href="favicon.ico">
        <link rel="icon" type="image/png" href="favicon.ico">
        <title>글로벌헬스파트너스</title>
        
        <!-- Google Tag Manager -->
        <script async src="https://www.googletagmanager.com/gtm.js?id=GTM-KM4JGCQ8"></script>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KM4JGCQ8');</script>
        <!-- End Google Tag Manager -->
        
        <link href="/web_basic/css/default.css" type="text/css" rel="stylesheet">
        <link href="/web_basic/css/layout.css" type="text/css" rel="stylesheet">
        <link href="/web_basic/css/contents.css" type="text/css" rel="stylesheet">
        <link href="/web_basic/css/board.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="/web_basic/js/slick/slick.css" />
        <link rel="stylesheet" href="/web_basic/css/main.css" type="text/css" media="all" />
        <script src="/web_basic/js/jquery-3.6.0.min.js"></script>
        <script src="/web_basic/js/common.js"></script>
        <script src="/web_basic/js/pictuerfill.js"></script>
        <script src="/web_basic/js/slick/slick.js"></script>
        <script src="/web_basic/js/main.js"></script>
    </head>
    <body class="pc">
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KM4JGCQ8"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
        
        <ul class="sknavi_box">
            <li><a href="#section" class="sknavi">본문바로가기</a></li>
            <li><a href="#gnb" class="sknavi">메인메뉴 바로가기</a></li>
            <li><a href="#footer" class="sknavi">사이트정보 바로가기</a></li>
        </ul>
        <header id="header" class="scroll">
            <div class="topBtnList">
                <div class="langList">
                    <select onchange="window.location.href=$(this).val();">
                        <option selected="">Korean</option>
                        <!-- <option value="/web_eng">English</option> -->
                    </select>
                </div>
            </div>
            <div class="headerWrap">
                <h1>
                    <a href="/web_basic">
                        <img src="/web_basic/img/common/로고_가로형-한글영문(new).png" alt="글로벌헬스파트너스" style="margin-top: -10px; margin-bottom: 10px;">
                    </a>
                </h1>
                <div class="rightCont">
                    <nav class="navList">
                        <ul id="gnb">
                            <?php include 'navigation.php'; ?>
                        </ul>
                    </nav>
                    <p class="btnGo"><a href="javascript:;" onclick="openDonationModal()">참여하기</a></p>
                </div>
            </div>
        </header> 
        <div id="donationModal" class="modal" style="display: none;">
            <div class="modal-content">
                <span class="close" onclick="closeDonationModal(1)">&times;</span>
                <h2>준비중입니다</h2>
                <p>현재 후원하기 기능은 준비 중입니다. 나중에 다시 시도해 주세요.</p>
                <div class="form-buttons">
                    <button type="button" class="btnCancel" onclick="closeDonationModal()">닫기</button>
                </div>
            </div>
        </div>
    </body>
</html>



<style>
/* 모달 스타일 */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: 5% auto;
    padding: 20px;
    border: 1px solid #888;
    width: 50%;
    max-width: 600px;
    border-radius: 8px;
}

.close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
}

.close:hover {
    color: black;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: #2c5282;
}

.radio-group {
    display: flex;
    gap: 20px;
}

.radio-label {
    display: flex;
    align-items: center;
    gap: 5px;
    cursor: pointer;
}

.amount-group {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 10px;
}

.amount-label {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    cursor: pointer;
    transition: all 0.2s;
}

.amount-label:hover {
    background-color: #f0f4f8;
}

.amount-label input[type="radio"]:checked + span {
    background-color: #2c5282;
    color: white;
}

.form-group input[type="text"],
.form-group input[type="tel"],
.form-group input[type="email"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
}

.form-buttons {
    margin-top: 30px;
    text-align: right;
}

.form-buttons button {
    padding: 10px 20px;
    margin-left: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 14px;
}

.form-buttons .btnSubmit {
    background-color: #2c5282;
    color: white;
}

.form-buttons .btnCancel {
    background-color: #6c757d;
    color: white;
}
</style>

<script>

function openDonationModal(noticeId) {
    document.getElementById('donationModal').style.display = 'block';
}

function closeDonationModal() {
    document.getElementById('donationModal').style.display = 'none';
}

// 모달 닫기 버튼 이벤트
document.getElementsByClassName('close')[0].onclick = closeDonationModal;

// 모달 외부 클릭 시 닫기
window.onclick = function(event) {
    if (event.target == document.getElementById('donationModal')) {
        closeDonationModal();
    }
}

</script>