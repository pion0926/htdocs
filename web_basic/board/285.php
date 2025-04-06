<?php include "../include/header.php"; ?>
<?php include "../include/admin_check.php"; ?>

<div id="news" class="wrap">
    <script>
    $(function(){
        var navPageTitle = $(".depth2 .active").text();
        $(".subTop #lnb > a").append(navPageTitle);
        $(document).on("click", "#lnb > a", function(e){
            e.preventDefault();
            $("#lnb > div").slideToggle(100);
        });
    });
    $(window).on("load resize", function() {
        var wid_w = $(window).width();
        if(wid_w > 1279){
            $("#lnb > div").removeAttr("style");
        }
    });
    </script>
    <div class="subTop">
        <div class="pageGroup">
            <h2>공지/뉴스</h2>
        </div>
        <div id="lnb">
            <a href="/web_basic/board/list.php?pagen=285">전체</a>
            <div class="depth2">
                <ul>
                    <li><a href="/web_basic/board/list.php?pagen=285&amp;CATENUM=0" id="depthname">전체</a></li>
                </ul>
            </div>
        </div>
    </div>
    <section id="container" class="news group_num_217">
        <div class="contents page_285">
            <div class="boardWrap">
                <div class="boardList">
                    <?php if (isAdmin()): ?>
                    <div class="boardManage">
                        <a href="/web_basic/board/write.php?pagen=285" class="btnWrite">공지사항 작성</a>
                    </div>
                    <?php endif; ?>
                    <table>
                        <thead>
                            <tr>
                                <th scope="col">번호</th>
                                <th scope="col">제목</th>
                                <th scope="col">작성자</th>
                                <th scope="col">작성일</th>
                                <th scope="col">조회수</th>
                                <th scope="col">참여하기</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td class="title">
                                    <a href="/web_basic/board/view.php?sno=1">지금 후원하기</a>
                                    <?php if (isAdmin()): ?>
                                    <div class="btnManage">
                                        <a href="/web_basic/board/write.php?pagen=285&mode=edit&sno=1" class="btnEdit">수정</a>
                                        <a href="javascript:deleteNotice(1);" class="btnDelete">삭제</a>
                                    </div>
                                    <?php endif; ?>
                                </td>
                                <td>관리자</td>
                                <td>2024-04-06</td>
                                <td>0</td>
                                <td>
                                    <button class="btnParticipate" onclick="openDonationModal(1)">참여하기</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="pagination">
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#">4</a>
                    <a href="#">5</a>
                    <a href="#">6</a>
                    <a href="#">7</a>
                    <a href="#">8</a>
                    <a href="#">9</a>
                    <a href="#">10</a>
                    <a href="#" class="next">다음</a>
                </div>
                <fieldset class="searchArea">
                    <form action="/web_basic/board/list.php?pagen=285" name="searchform" method="GET">
                        <input type="hidden" name="pagen" value="285">
                        <input type="hidden" name="CATENUM" value="0">
                        <div class="boardSearch">
                            <label class="lhide" for="search">검색할 조건을 선택해주세요</label>
                            <select class="select" name="search_option" id="search" title="검색할 조건을 선택해주세요">
                                <option value="제목" <?php echo $search_option === '제목' ? 'selected' : ''; ?>>제목</option>
                                <option value="내용" <?php echo $search_option === '내용' ? 'selected' : ''; ?>>내용</option>
                            </select>
                            <div class="searchBox">
                                <label class="lhide" for="searchtext">검색어를 입력하세요.</label>
                                <input type="text" class="text" placeholder="제목 또는 내용을 입력해주세요." title="제목 또는 내용을 입력해주세요." name="search_info" value="<?php echo htmlspecialchars($search_info); ?>" id="searchtext">
                                <input type="submit" value="검색">
                            </div>
                        </div>
                    </form>
                </fieldset>
            </div>
        </div>
    </section>
</div>

<!-- 후원금 모금 모달 -->
<div id="donationModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>후원하기</h2>
        <form id="donationForm">
            <input type="hidden" id="noticeId" name="noticeId">
            
            <div class="form-group">
                <label>후원 유형</label>
                <div class="radio-group">
                    <label class="radio-label">
                        <input type="radio" name="donationType" value="regular" required> 정기 후원
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="donationType" value="one-time" required> 일시 후원
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label>후원금액</label>
                <div class="amount-group">
                    <label class="amount-label">
                        <input type="radio" name="donationAmount" value="10000" required> 1만원
                    </label>
                    <label class="amount-label">
                        <input type="radio" name="donationAmount" value="30000" required> 3만원
                    </label>
                    <label class="amount-label">
                        <input type="radio" name="donationAmount" value="50000" required> 5만원
                    </label>
                    <label class="amount-label">
                        <input type="radio" name="donationAmount" value="100000" required> 10만원
                    </label>
                </div>
            </div>

            <div class="form-group">
                <label>후원자 유형</label>
                <div class="radio-group">
                    <label class="radio-label">
                        <input type="radio" name="donorType" value="personal" required onclick="toggleDonorFields()"> 개인
                    </label>
                    <label class="radio-label">
                        <input type="radio" name="donorType" value="organization" required onclick="toggleDonorFields()"> 기업/단체
                    </label>
                </div>
            </div>

            <div id="personalFields">
                <div class="form-group">
                    <label for="donorName">이름</label>
                    <input type="text" id="donorName" name="donorName" required>
                </div>
                <div class="form-group">
                    <label for="donorPhone">휴대폰 번호</label>
                    <input type="tel" id="donorPhone" name="donorPhone" required>
                </div>
            </div>

            <div id="organizationFields" style="display: none;">
                <div class="form-group">
                    <label for="orgName">기업/단체명</label>
                    <input type="text" id="orgName" name="orgName">
                </div>
                <div class="form-group">
                    <label for="orgContactName">담당자명</label>
                    <input type="text" id="orgContactName" name="orgContactName">
                </div>
                <div class="form-group">
                    <label for="orgContactPhone">담당자 연락처</label>
                    <input type="tel" id="orgContactPhone" name="orgContactPhone">
                </div>
            </div>

            <div class="form-buttons">
                <button type="submit" class="btnSubmit">후원하기</button>
                <button type="button" class="btnCancel" onclick="closeDonationModal()">취소</button>
            </div>
        </form>
    </div>
</div>

<style>
.boardList table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 30px;
}

.boardList th,
.boardList td {
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #e2e8f0;
}

.boardList th {
    background: #f8fafc;
    font-weight: 600;
    color: #2c5282;
}

.boardList td.title {
    text-align: left;
}

.boardList td.title a {
    color: #2d3748;
    text-decoration: none;
    transition: color 0.2s;
}

.boardList td.title a:hover {
    color: #2c5282;
}

.pagination {
    display: flex;
    justify-content: center;
    gap: 5px;
    margin-bottom: 30px;
}

.pagination a {
    display: inline-block;
    padding: 8px 12px;
    border: 1px solid #e2e8f0;
    border-radius: 4px;
    color: #4a5568;
    text-decoration: none;
    transition: all 0.2s;
}

.pagination a:hover,
.pagination a.active {
    background: #2c5282;
    color: white;
    border-color: #2c5282;
}

.searchArea {
    border: none;
    margin-top: 20px;
}

.boardSearch {
    display: flex;
    justify-content: center;
    gap: 10px;
    align-items: center;
}

.boardSearch .select {
    padding: 8px;
    border: 1px solid #e2e8f0;
    border-radius: 4px;
    min-width: 100px;
}

.searchBox {
    display: flex;
    gap: 10px;
}

.searchBox .text {
    padding: 8px 12px;
    border: 1px solid #e2e8f0;
    border-radius: 4px;
    min-width: 300px;
}

.searchBox input[type="submit"] {
    padding: 8px 16px;
    background: #2c5282;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background 0.2s;
}

.searchBox input[type="submit"]:hover {
    background: #2b6cb0;
}

.lhide {
    position: absolute;
    width: 1px;
    height: 1px;
    padding: 0;
    margin: -1px;
    overflow: hidden;
    clip: rect(0, 0, 0, 0);
    border: 0;
}

.boardManage {
    margin-bottom: 20px;
    text-align: right;
}

.btnWrite {
    display: inline-block;
    padding: 8px 16px;
    background: #2c5282;
    color: white;
    text-decoration: none;
    border-radius: 4px;
    transition: background 0.2s;
}

.btnWrite:hover {
    background: #2b6cb0;
}

.btnManage {
    display: inline-block;
    margin-left: 10px;
}

.btnEdit, .btnDelete {
    display: inline-block;
    padding: 4px 8px;
    margin-left: 5px;
    font-size: 12px;
    border-radius: 3px;
    text-decoration: none;
}

.btnEdit {
    background: #4299e1;
    color: white;
}

.btnDelete {
    background: #e53e3e;
    color: white;
}

.btnEdit:hover, .btnDelete:hover {
    opacity: 0.8;
}

.btnParticipate {
    padding: 8px 16px;
    background-color: #2c5282;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.2s;
}

.btnParticipate:hover {
    background-color: #2b6cb0;
}

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
function deleteNotice(sno) {
    if(confirm('정말로 삭제하시겠습니까?')) {
        location.href = '/web_basic/board/delete.php?sno=' + sno;
    }
}

// 모달 관련 함수
function openDonationModal(noticeId) {
    document.getElementById('donationModal').style.display = 'block';
    document.getElementById('noticeId').value = noticeId;
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

// 후원자 유형에 따른 필드 표시/숨김
function toggleDonorFields() {
    const personalFields = document.getElementById('personalFields');
    const organizationFields = document.getElementById('organizationFields');
    const donorType = document.querySelector('input[name="donorType"]:checked').value;

    if (donorType === 'personal') {
        personalFields.style.display = 'block';
        organizationFields.style.display = 'none';
        // 개인 필드만 필수로 설정
        document.getElementById('donorName').required = true;
        document.getElementById('donorPhone').required = true;
        document.getElementById('orgName').required = false;
        document.getElementById('orgContactName').required = false;
        document.getElementById('orgContactPhone').required = false;
    } else {
        personalFields.style.display = 'none';
        organizationFields.style.display = 'block';
        // 기업/단체 필드만 필수로 설정
        document.getElementById('donorName').required = false;
        document.getElementById('donorPhone').required = false;
        document.getElementById('orgName').required = true;
        document.getElementById('orgContactName').required = true;
        document.getElementById('orgContactPhone').required = true;
    }
}

// 폼 제출 처리
document.getElementById('donationForm').onsubmit = function(e) {
    e.preventDefault();
    
    // 폼 데이터 수집
    const formData = {
        noticeId: document.getElementById('noticeId').value,
        donationType: document.querySelector('input[name="donationType"]:checked').value,
        donationAmount: document.querySelector('input[name="donationAmount"]:checked').value,
        donorType: document.querySelector('input[name="donorType"]:checked').value,
        donorName: document.getElementById('donorName').value,
        donorPhone: document.getElementById('donorPhone').value,
        orgName: document.getElementById('orgName').value,
        orgContactName: document.getElementById('orgContactName').value,
        orgContactPhone: document.getElementById('orgContactPhone').value
    };
    
    // 서버로 데이터 전송
    fetch('/web_basic/board/process_donation.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams(formData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert(data.message);
            closeDonationModal();
            // 폼 초기화
            document.getElementById('donationForm').reset();
        } else {
            alert(data.message);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('오류가 발생했습니다. 다시 시도해주세요.');
    });
};
</script>

<?php include "../include/footer.php"; ?> 