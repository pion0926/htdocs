    <footer id="footer">
        <div class="contents"> 
            <div class="addrWrap">
                <ul class="addrNavList">
                    <li class="addrListView pcVersionMore"><a href="javascript:desktopMode();">PC버전</a></li>
                    <!-- <li class="addrListView"><a href="/web_basic/introduce/introduce.php?pagen=212">오시는길</a></li> -->
                    <li><a href="/web_basic/etc/etc.php?pagen=376">사이트맵</a></li>
                    <li><a href="/web_basic/etc/etc.php?pagen=377">이용약관</a></li>
                    <li><a href="/web_basic/etc/etc.php?pagen=378">개인정보처리방침</a></li>
                    <!-- <li><a href="/web_basic/etc/etc.php?pagen=379">이메일무단수집거부</a></li> -->
                    <!-- <li><a href="javascript:;" onclick="open('https://mrmweb.hsit.co.kr/v2/default.aspx?Server=mKyKRXgHGO9LVrt7PllNmg==&amp;action=receipt','',',scrollbars=yes,top=0,left=0,status=no,resizable=no,menubar=no,width=1050,height=700')">기부금영수증</a></li> -->
                    <!-- <li class="addrListView"><a href="/web_basic/board/list.php?pagen=299">뉴스레터 신청</a></li> -->
                </ul>
                <div class="addrCont">
                    <p class="addrBasicText">글로벌헬스파트너스는 지구촌 누구도 소외되지 않는 건강한 삶을 지원하는 비영리 조직입니다.</p>
                    <p>후원계좌: 기업은행 695-031670-04-016(예금주: 글로벌헬스파트너스)</p>
                    <p>단체명: 글로벌헬스파트너스 l 고유번호증: 621-82-93641 l 대표자: 정애숙</p>
                    <p style="white-space: nowrap;">(우)28114 충북 청주시 흥덕구 옥산면 덕촌삼성골길 14 l 대표전화: (070)8019-3087 l 팩스:(0504)369-9380 l 이메일: gbhealthpartners@gmail.com</p>
                </div>
                <div class="partnerList" style="margin-top: 30px; text-align: center; overflow: hidden;">
                    <p class="partnerText" style="margin-bottom: 20px;">글로벌헬스파트너스의 소중한 협력 기관</p>
                    <div class="logo-container" style="display: flex; width: 100%; overflow: hidden;">
                        <div class="logo-carousel">
                            <!-- Logos to display -->
                            <a href="https://www.mohw.go.kr" target="_blank"><img src="/web_basic/img/common/보건복지부.png" alt="보건복지부" style="height: 40px; width: auto;"></a>
                            <a href="https://www.koica.go.kr/" target="_blank"><img src="/web_basic/img/common/koica.png" alt="KOICA" style="height: 30px; width: auto;"></a>
                            <a href="https://www.kofih.org/" target="_blank"><img src="/web_basic/img/common/kofi.png" alt="KOFIH" style="height: 40px; width: auto;"></a>
                            <a href="https://www.chungbuk.go.kr/" target="_blank"><img src="/web_basic/img/common/충청북도.png" alt="충청북도" style="height: 40px; width: auto;"></a>
                            <a href="http://www.cbngo.org/main.php" target="_blank"><img src="/web_basic/img/common/충북시민사회지원센터.png" alt="충북시민사회지원센터" style="height: 40px; width: auto;"></a>
                            <a href="https://www.chungbuk.ac.kr/" target="_blank"><img src="/web_basic/img/common/충북대학교.png" alt="충북대학교" style="height: 40px; width: auto;"></a>
                            <!-- Duplicated logos for seamless circular effect -->
                            <a href="https://www.mohw.go.kr" target="_blank"><img src="/web_basic/img/common/보건복지부.png" alt="보건복지부" style="height: 40px; width: auto;"></a>
                            <a href="https://www.koica.go.kr/" target="_blank"><img src="/web_basic/img/common/koica.png" alt="KOICA" style="height: 30px; width: auto;"></a>
                            <a href="https://www.kofih.org/" target="_blank"><img src="/web_basic/img/common/kofi.png" alt="KOFIH" style="height: 40px; width: auto;"></a>
                            <a href="https://www.chungbuk.go.kr/" target="_blank"><img src="/web_basic/img/common/충청북도.png" alt="충청북도" style="height: 40px; width: auto;"></a>
                            <a href="http://www.cbngo.org/main.php" target="_blank"><img src="/web_basic/img/common/충북시민사회지원센터.png" alt="충북시민사회지원센터" style="height: 40px; width: auto;"></a>
                            <a href="https://www.chungbuk.ac.kr/" target="_blank"><img src="/web_basic/img/common/충북대학교.png" alt="충북대학교" style="height: 40px; width: auto;"></a>
                        </div>
                    </div>
                </div>
                
                <p class="copy" style="margin-top: 30px;">Copyright © 글로벌헬스파트너스 All Rights Reserved.</p>
            </div>
            </div>

            <p class="footerLogo" style="margin-top: 20px; text-align: center;"><img src="/web_basic/img/common/footer_GHP_영문로고.png" alt="글로벌헬스파트너스 로고"></p>
        </div>
    </footer>
    <style>
        .logo-carousel {
            display: flex;
            transition: transform 0.5s ease; /* Smooth transition for the carousel */
        }
        .logo-carousel a {
            flex: 0 0 16.66%; /* Each logo takes up 1/6 of the container */
        }
    </style>
    <script type="text/javascript" src="//wcs.naver.net/wcslog.js"></script>
    <script type="text/javascript">
    if(!wcs_add) var wcs_add = {};
    wcs_add["wa"] = "220562289d0c68";
    if(window.wcs) {
    wcs_do();
    }
    const logos = document.querySelectorAll('.logo-carousel a');
    const totalLogos = logos.length;
    const visibleLogos = 6; // Number of logos to show at once
    let currentIndex = 0;

    function updateLogos() {
        // Move the carousel to the left
        currentIndex = (currentIndex + 1) % totalLogos; // Move to the next logo
        const offset = -currentIndex * (100 / visibleLogos); // Calculate the offset
        document.querySelector('.logo-carousel').style.transform = `translateX(${offset}%)`; // Apply the offset
    }

    setInterval(updateLogos, 3000); // Update logos every 3 seconds
    </script>
    </body></html> 