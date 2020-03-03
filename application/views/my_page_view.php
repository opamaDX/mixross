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
                                            data-zanim='{"delay":0.1}'>マイページ</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Section1 トップ画面 End -->

        <!-- Section2 イベント Start -->
        <section class="background-11">
            <div class="container">

                <div class="row">
                    <div class="col">
                        <h3 class="text-center fs-2 fs-lg-3" style="font-size: calc(93.5% + 0.5vw) !important">Your QRコード</h3>
                        <hr class="short"
                            data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                            data-zanim-trigger="scroll" />
                    </div>
                </div>

                <div class="row mt-lg-6">

                </div>
            </div>
        </section>
        <!-- Section2 イベント End -->

        <!-- Section3 公式SNS Start -->
        <section style="background-color: white;">
            <?php include(dirname(__FILE__)."/parts/sns.php"); ?>
        </section>
        <!-- Section3 公式SNS End -->

        <!-- Footer Start -->
        <?php include(dirname(__FILE__)."/inc/footer.php"); ?>
        <!-- Footer End -->