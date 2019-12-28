<!DOCTYPE html>
<html lang="ja">

<head>
    <?php include(dirname(__FILE__)."/inc/header.php"); ?>
</head>

<body data-spy="scroll" data-target=".inner-link" data-offset="60">
    <main>
        <div class="loading" id="preloader">
            <div class="loader h-100 d-flex align-items-center justify-content-center">
                <div class="line-scale">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>

        <!-- インフォメーションメニュー Start -->
        <section class="background-primary py-3 d-none d-sm-block">
            <?php include(dirname(__FILE__)."/parts/info-menu.php"); ?>
        </section>
        <!-- インフォメーションメニュー End -->

        <!-- ナビゲーションメニュー Start -->
        <?php include(dirname(__FILE__)."/parts/nav-menu.php"); ?>
        <!-- ナビゲーションメニュー End -->

        <!-- Section1 トップ画面 Start -->
        <section class="padding: 0 0;">
            <div class="flexslider flexslider-simple" style="min-height: 517px;">
                <ul class="slides">
                    <li data-zanim-timeline="{}">
                        <section class="py-0">
                            <div class="background-holder"
                                style="background-image:url(<?php echo base_url(); ?>assets/images/mixross_cando_back.jpg);"> </div>
                            <div class="container">
                                <div class="row align-items-center py-8" data-inertia='{"weight":1.5}'>
                                    <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                                        <p class="color-primary mt-4 mb-5 lh-2 fs-1 fs-md-2 zopacity micros_cando"
                                            data-zanim='{"delay":0.1}'>よくある質問</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Section1 トップ画面 End -->

        <!-- Section2 よくある質問 Start -->
        <section class="background-white  text-center" style="position: relative; padding-top: 6rem;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-6">
                        <h3 class="color-primary fs-2 fs-lg-3" style="font-size: 180% !important; padding: 0;">
                            施設全体について</h3>
                        <hr class="short"
                            data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                            data-zanim-trigger="scroll">
                    </div>
                </div>
            </div>
            <div class="question_list">
                <ul>
                    <li><span class="question_title">営業時間は何時から何時までですか？</span><br>　平⽇は14:00〜23:00、⼟⽇・祝⽇は14:00〜20:00となります。
                    </li>
                    <li><span class="question_title">定休日はありますか？</span><br>　お盆・お正⽉はお休みです。詳細は⽇が近くなりましたら本ウェブサイトに掲載します。</li>
                    <li><span class="question_title">Wi-Fiはありますか？</span><br>　ご⽤意しております。ご⾃由にお使いください。</li>
                    <li><span class="question_title">飲食物の持ち込みはできますか？</span><br>　お持ち込み可能です。お飲み物は店内にもご⽤意しております。</li>
                </ul>
            </div>
        </section>

        <section class="background-white  text-center" style="position: relative; padding-top: 6rem; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-6">
                        <h3 class="color-primary fs-2 fs-lg-3" style="font-size: 180% !important; padding: 0;">
                            入場について</h3>
                        <hr class="short"
                            data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                            data-zanim-trigger="scroll">
                    </div>
                </div>
            </div>
            <div class="question_list">
                <ul>
                    <li><span class="question_title">⼤学院⽣・⾼校⽣は利⽤できますか？</span><br>　ご利⽤可能です。勉強などに是⾮ご活⽤ください。</li>
                    <li><span class="question_title">⼤学院⽣・⾼校⽣は利⽤できますか？</span><br>　ご利⽤可能です。勉強や交流に是⾮ご活⽤ください。</li>
                    <li><span class="question_title">⼊場制限はありますか？</span><br>　原則学⽣の⽅（学⽣証を持った⽅）のみご利⽤が可能です。</li>
                    <li><span class="question_title">入場する際に会員登録は必要ですか？</span><br>　ご必要になります。本ウェブサイトから可能ですし、来店時のご登録も可能です。
                    </li>
                    <li><span
                            class="question_title">入場料はどれくらいですか？</span><br>　ご利⽤料は基本的にはかかりません。<br>　⼀部のイベントへの参加は参加費がかかる場合がございます。
                    </li>
                    <li><span class="question_title">再入場はできますか？</span><br>　再入場はしていただけます。</li>
                </ul>
            </div>
        </section>

        <section class="background-white  text-center" style="position: relative; padding-top: 6rem; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-6">
                        <h3 class="color-primary fs-2 fs-lg-3" style="font-size: 180% !important;">ご予約について</h3>
                        <hr class="short"
                            data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                            data-zanim-trigger="scroll">
                    </div>
                </div>
            </div>
            <div class="question_list">
                <ul>
                    <li><span class="question_title">ミーティングルームはどうやったら使えますか？</span><br>　受付か本ウェブサイトから予約が可能です。</li>
                    <li><span class="question_title">各イベントに参加するにはどうしたらいいですか？</span><br>　マイページよりご予約ください。</li>
                    <li><span class="question_title">場所はどこにありますか？</span><br>　未記入</li>
                    <li><span class="question_title">ちょっと入りづらいのですが。。</span><br>　未記入</li>
                    <li><span class="question_title">意識高い系の人ばかりで入りづらいのですが。</span><br>　未記入</li>
                    <li><span
                            class="question_title">社会人が使うにはどうしたらいいですか？</span><br>　基本的には法人契約となります。<br>　見学はいつでも可能ですので、お問い合わせフォームよりご連絡お願いします。
                    </li>
                </ul>
            </div>
        </section>
        <!-- Section2 よくある質問 End -->

        <!-- Section3 公式SNS Start -->
        <section style="background-color: white;">
            <?php include(dirname(__FILE__)."/parts/sns.php"); ?>
        </section>
        <!-- Section3 公式SNS End -->

        <!-- Section4 フッター Start -->
        <section class="background-primary text-center py-4">
            <?php include(dirname(__FILE__)."/inc/footer.php"); ?>
        </section>
        <!-- Section4 フッター End -->

    </main>

    <!-- スクリプト読み込み Start -->
    <?php include(dirname(__FILE__)."/inc/footer-script.php"); ?>
    <!-- スクリプト読み込み End -->
</body>

</html>