
<?php include "include/header.php"; ?>

<!-- Add viewport for responsive rendering -->
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<section id="container" class="main">
    <div class="contents">
        <div class="contentsView">
            <!-- Main Banner Section -->
            <div class="mainBanner">
                <div class="contents">
                    <div class="mainBannerBox">
                        <div class="mainBannerCont slider">
                            <?php
                            $images = ["bg0.png", "bg1.png", "bg2.png", "bg3.png", "bg4.png"];
                            foreach ($images as $img) {
                                echo "<div class='slide-item'><img src=\"/web_basic/program/file/{$img}\" alt=\"메인 배너\"></div>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mission and Activities Section (New Inserted Section) -->
            <div class="section missionActivitySection">
                <div class="contents">
                    <div class="halfCont">
                        <p class="imgBox">
                            <img src="/web_basic/img/introduce/우리의사명.png" alt="사명선언서">
                        </p>
                        <dl>
                            <dt class="contTitle">우리의 사명 <span class="engText">Mission</span></dt>
                            <dd>
                                지구촌 누구도 소외되지 않는 건강한 삶과 더 나은 내일을 위해 함께합니다.<br>
                                <span style="color: #00afb1;">Better Health Better Tomorrow</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="halfCont">
                        <dl>
                            <dt class="contTitle">주요 활동</dt>
                            <dd>
                                <ul class="halfNumList">
                                    <li><span class="numberSpan">1</span> 보건문제 해결을 위한 연구조사</li>
                                    <li><span class="numberSpan">2</span> 지구촌 건강취약계층을 위한 국제협력</li>
                                    <li><span class="numberSpan">3</span> 보건문제 해결을 위한 전문 인력 양성</li>
                                    <li><span class="numberSpan">4</span> 건강나눔 봉사활동 및 캠페인</li>
                                    <li><span class="numberSpan">5</span> 의료접근성 향상을 위한 의료지원</li>
                                    <li><span class="numberSpan">6</span> 보건 지식 확산 및 교류</li>
                                </ul>
                            </dd>
                        </dl>
                        <p class="imgBox">
                            <img src="/web_basic/img/introduce/top02.jpg" alt="미션 이미지">
                        </p>
                    </div>
                </div>
            </div>

            <!-- Report Section -->
            <div class="reportCont">
                <div class="contents">
                    <div class="report-wrapper" style="display:flex;flex-wrap:wrap;gap:20px">
                        <div class="textCont" style="flex:1;min-width:280px">
                            <div class="report-header">
                                <h2 class="report-title">투명하고 효율적인 재정관리</h2>
                                <p class="report-subtitle"><span style="font-weight: bold; color: #0066cc;">투명성과 신뢰</span>는 글로벌헬스파트너스의 핵심 가치 입니다.</p>
                            </div>
                            <div class="report-description">
                                <p>소중한 후원금이 꼭 필요한 곳에 효율적으로 사용될 수 있도록, 모든 수입과 지출을 투명하게 관리하고 있습니다.</p>
                            </div>
                            <div class="report-links">
                                <a href="/web_basic/introduce/introduce.php?pagen=448" class="report-link">
                                    <span class="link-text">재정보고</span>
                                </a>
                            </div>
                        </div>
                        <div class="graphCont" style="flex:1;min-width:280px">
                            <div class="graph-wrapper">
                                <div class="imgBox">
                                    <img src="/web_basic/img/main/이미지준비중.gif" alt="83% (2020사업수행비)" />
                                </div>
                                <div class="graph-text">
                                    <p class="highlight">글로벌헬스파트너스는</p>
                                    <p class="emphasis">투명성과 신뢰의 가치를 지향합니다</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<?php include "include/footer.php"; ?>

<script>
    // $(document).ready(function() {
    //     // mobile nav toggle (if exists)
    //     $(".btnAllNav").on("click", function () {
    //         $(".allNavView").addClass("active");
    //     });
    //     $(".allNavClose").on("click", function () {
    //         $(".allNavView").removeClass("active");
    //     });

    //     $("#emailSelect").change(function() {
    //         if ($("#emailSelect").val() === "") {
    //             $("#email_domain").focus();
    //             if ($("#email_domain").val() !== "") {
    //                 $("#email_domain").val("");
    //             }
    //         } else {
    //             $("#email_domain").val($("#emailSelect").val());
    //         }
    //     });
    // });

    $(document).ready(function(){
        $('.mainBannerCont.slider').slick({
            autoplay: true,
            autoplaySpeed: 3000,
            dots: false, // ← 이 줄을 false로!
            arrows: true,
            prevArrow: $('.slick-prev'),
            nextArrow: $('.slick-next')
        });
    });

    function newsApplywrite() {
        var f = document.newsApply;
        f.mode.value = "insert";

        if (f.P_name.value === "") {
            alert("이름을 입력해 주시기 바랍니다.");
            f.P_name.focus();
            return false;
        }

        if (f.P_email.value === "") {
            alert("이메일주소를 입력해 주시기 바랍니다.");
            f.P_email.focus();
            return false;
        }

        if (f.P_email_domain.value === "") {
            alert("이메일주소를 입력해 주시기 바랍니다.");
            f.P_email_domain.focus();
            return false;
        }

        if (!$("#agree").is(":checked")) {
            alert("개인정보 수집 및 이용에 동의해 주시기 바랍니다.");
            $("#agree").focus();
            return false;
        }

        if (!confirm("뉴스레터를 신청 하시겠습니까?")) {
            return false;
        }
    }
</script>
