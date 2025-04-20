<?php include '../include/header.php'; ?>
<style>
    .greetingCont {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;
        padding: 40px 20px;
        position: relative;
    }
    .greetingCont .imgBox {
        max-width: 280px;
        margin: 0 auto;
        position: relative;
        z-index: 2;
        overflow: hidden;
    }
    .greetingCont .imgBox img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        display: block;
        position: relative;
    }
    .greetingCont .imgBox::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: inherit;
        filter: blur(10px);
        z-index: -1;
        transform: scale(1.1);
    }
    .greetingText {
        width: 100%;
        max-width: 800px;
        margin: 0 auto;
        position: relative;
        z-index: 1;
        font-family: 'Roboto', sans-serif;
    }
    .greetingTop {
        text-align: center;
        margin-bottom: 30px;
    }
    .greetingTop dt {
        font-size: 1.2em;
        font-weight: bold;
        margin-bottom: 15px;
        color: #333;
    }
    .greetingTop dd {
        color: #666;
        line-height: 1.6;
        margin-bottom: 15px;
        text-align: justify;
    }
    .greetingWriting {
        background: #f8f8f8;
        padding: 30px;
        border-radius: 8px;
    }
    .greetingWriting ul li {
        margin-bottom: 20px;
    }
    .greetingWriting ul li dt {
        font-weight: bold;
        color: #00afb1;
        margin-bottom: 10px;
    }
    .greetingWriting ul li dd {
        color: #666;
        line-height: 1.6;
        text-align: justify;
    }
    .basicText {
        margin: 30px 0;
        text-align: center;
        color: #333;
        line-height: 1.8;
    }
    .greetingWriter {
        text-align: right;
        margin-top: 30px;
        padding-top: 20px;
        border-top: 1px solid #eee;
    }
    .greetingWriter img {
        margin-left: 10px;
        vertical-align: middle;
        width: 100px;
        height: auto;
    }
    /* Unified point color class */
    .point-color {
        color: #00afb1; /* Unified color */
    }
</style>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
<section id="container" class="introduce group_num_207">
    <div class="contents page_207">
        <div class="contenstView">
            <div class="greetingCont">
                <p class="imgBox"><img src="/web_basic/img/introduce/greeting.jpg" alt="글로벌헬스파트너스 이사장 정애숙"></p>
                <div class="greetingText">
                    <dl class="greetingTop"> 
                        <dt style="text-align: center;">안녕하세요. 글로벌헬스파트너스 이사장 정애숙입니다.</dt>
                        <dd>글로벌헬스파트너스를 찾아주시고, 관심 가져주신 모든 분들께 진심으로 감사드립니다.</dd><br> 
                        <dd style="line-height: 1.8;">저희는 <span class="point-color">"Better Health, Better Tomorrow"</span>를 비전으로, 지구촌 누구도 건강으로부터 소외되지 않는 세상을 만들기 위해 끊임없이 고민하고 실천하고 있습니다.</dd>
                        <dd style="line-height: 1.8;"> 건강은 누구나 평등하게 누려야할 기본권이며, 함께 나눌 때 더 큰 변화를 만들어낼 수 있다고 믿습니다.</dd>
                        <dd style="line-height: 1.8;">글로벌헬스파트너스는 국내외 보건문제 해결을 위한 연구와 실천, 전문 인재 양성, 그리고 의료 취약 지역을 위한 국제협력 활동을 통해 <span class="point-color">지속 가능한 건강한 미래</span>를 만들어가고자 합니다.</dd>
                        <dd style="line-height: 1.8;">또한 정부, NGO, 국제기구 등 가치와 비전을 공유하는 파트너들과 함께 교육, 캠페인, 봉사, 프로젝트를 이어가며, <span class="point-color"> 전 세계 모두가 건강할 권리를 누릴 수 있도록</span> 노력하고 있습니다.</dd>
                        <dd style="line-height: 1.8;">앞으로도 저희는 연대와 협력을 바탕으로 더 많은 이들이 건강한 삶을 살아갈 수 있도록 최선을 다하겠습니다.</dd>
                        <dd style="line-height: 1.8;">여러분의 따뜻한 관심과 동행을 부탁드립니다.</dd>
                        <dd style="line-height: 1.8;">감사합니다!</dd>
                        <dd class="greetingWriter" style="text-align: right; margin-top: 20px;">
                            글로벌헬스파트너스 이사장<img src="/web_basic/img/introduce/greeting_writer.jpg" alt="정애숙">
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</section>
