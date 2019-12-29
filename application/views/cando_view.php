<?php
    include( dirname(__FILE__)."/attributes/nav_menu_data.php");
    include(dirname(__FILE__)."/inc/header.php"); 
?>

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
                                            data-zanim='{"delay":0.1}'>みくろすで出来ること</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Section1 トップ画面 End -->

        <!-- Section2 みくろすでできること Start -->
        <section class="background-11">
            <div class="container">

                <h3 class="text-center fs-2 fs-md-3" style="font-size: calc(93.5% + 0.5vw) !important">みくろすで出来ること</h3>
                <hr class="short"
                    data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                    data-zanim-trigger="scroll" />

                <!-- row1 Start -->
                <div class="row no-gutters pos-relative mt-4 mt-lg-0">
                    <div class="elixir-caret d-none d-lg-block"></div>
                    <div class="col-lg-6 py-3 py-lg-0 mb-0 order-lg-2" style="min-height:300px;">
                        <div class="background-holder radius-tl-secondary radius-tl-lg-0 radius-tr-secondary radius-tr-lg-0"
                            style="background-image:url(<?php echo base_url(); ?>assets/images/mixros_cando_wifi.jpg);"></div>
                    </div>
                    <div
                        class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 background-white radius-bl-secondary radius-bl-lg-0 radius-br-secondary radius-br-lg-0">
                        <div class="d-flex align-items-center h-100">
                            <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim='{"delay":0}'>Wi-Fi・コンセント使いたい放題</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim='{"delay":0.1}'>
                                        課題やゼミ活動など⼤学⽣に⽋かせないようにサクサクと繋がるWi-Fiとコンセントも完備しております。</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim='{"delay":0.2}'>
                                        <a class="d-flex align-items-center" href="#">もっと詳しく
                                            <div class="overflow-hidden ml-2">
                                                <span class="d-inline-block"
                                                    data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row1 End -->

                <!-- row2 Start -->
                <div class="row no-gutters pos-relative mt-4 mt-lg-0">
                    <div class="elixir-caret d-none d-lg-block"></div>
                    <div class="col-lg-6 py-3 py-lg-0 mb-0" style="min-height:300px;">
                        <div class="background-holder radius-tl-secondary radius-tr-secondary radius-tr-lg-0 radius-tl-lg-0 radius-bl-0 radius-bl-lg-secondary"
                            style="background-image:url(<?php echo base_url(); ?>assets/images/mixros_cando_meeting.jpg); height: 39vh;"> </div>
                    </div>
                    <div
                        class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 background-white radius-bl-secondary radius-bl-lg-0 radius-br-secondary">
                        <div class="d-flex align-items-center h-100">
                            <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim='{"delay":0}'>ミーティングができる</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim='{"delay":0.1}'>
                                        ゼミ活動やサークル活動での打ち合わせのためにミーティングルームをご⽤意してます。ホワイトボードを完備しております。</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim='{"delay":0.2}'>
                                        <a class="d-flex align-items-center" href="#">もっと詳しく
                                            <div class="overflow-hidden ml-2">
                                                <span class="d-inline-block"
                                                    data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row2 End -->

                <!-- row3 Start -->
                <div class="row no-gutters pos-relative mt-4 mt-lg-0">
                    <div class="elixir-caret d-none d-lg-block"></div>
                    <div class="col-lg-6 py-3 py-lg-0 mb-0 order-lg-2" style="min-height:300px;">
                        <div class="background-holder radius-tl-secondary radius-tl-lg-0 radius-tr-secondary radius-tr-lg-0"
                            style="background-image:url(<?php echo base_url(); ?>assets/images/mixros_cando_event.jpg);"></div>
                    </div>
                    <div
                        class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 background-white radius-bl-secondary radius-bl-lg-0 radius-br-secondary radius-br-lg-0">
                        <div class="d-flex align-items-center h-100">
                            <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim='{"delay":0}'>イベントの開催に</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim='{"delay":0.1}'>
                                        イベントやセミナーを開催することができます。プロジェクター・スクリーンを完備しています。プレゼンテーションの練習をすることも可能です。</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim='{"delay":0.2}'>
                                        <a class="d-flex align-items-center" href="#">もっと詳しく
                                            <div class="overflow-hidden ml-2">
                                                <span class="d-inline-block"
                                                    data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row3 End -->

                <!-- row4 Start -->
                <div class="row no-gutters pos-relative mt-4 mt-lg-0">
                    <div class="elixir-caret d-none d-lg-block"></div>
                    <div class="col-lg-6 py-3 py-lg-0 mb-0" style="min-height:300px;">
                        <div class="background-holder radius-tl-secondary radius-tr-secondary radius-tr-lg-0 radius-tl-lg-0 radius-bl-0 radius-bl-lg-secondary"
                            style="background-image:url(<?php echo base_url(); ?>assets/images/mixros_cando_career.jpg); height: 39vh;"> </div>
                    </div>
                    <div
                        class="col-lg-6 px-lg-5 py-lg-6 p-4 my-lg-0 background-white radius-bl-secondary radius-bl-lg-0 radius-br-secondary">
                        <div class="d-flex align-items-center h-100">
                            <div data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim='{"delay":0}'>キャリアサポート</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim='{"delay":0.1}'>
                                        コーチングのトレーニングを受けた経験豊富なサポーターが、進路や就職のサポートを⾏います。</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div data-zanim='{"delay":0.2}'>
                                        <a class="d-flex align-items-center" href="#">もっと詳しく
                                            <div class="overflow-hidden ml-2">
                                                <span class="d-inline-block"
                                                    data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>&xrarr;</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- row4 End -->

                <div class="col-md-12 col-lg-12 py-0 mt-4 mt-lg-0" style="text-align: center">
                    <div class="px-4 pt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="overflow-hidden">
                            <div class="zopacity" data-zanim='{"delay":0.2}'>
                                <a class="btn btn-primary mr-3 mt-3" href="micros_cando.html">もっとみる
                                    <span class="fa fa-chevron-right ml-2"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Section2 みくろすでできること End -->

        <!-- Section3 公式SNS Start -->
        <section style="background-color: white;">
            <?php include(dirname(__FILE__)."/parts/sns.php"); ?>
        </section>
        <!-- Section3 公式SNS End -->

        <!-- Footer Start -->
        <?php include(dirname(__FILE__)."/inc/footer.php"); ?>
        <!-- Footer End -->