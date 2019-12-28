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
                                            data-zanim='{"delay":0.1}'>みくろすのイベント</p>
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
                        <h3 class="text-center fs-2 fs-lg-3" style="font-size: calc(93.5% + 0.5vw) !important">イベント</h3>
                        <hr class="short"
                            data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                            data-zanim-trigger="scroll" />
                    </div>
                </div>

                <div class="row mt-lg-6">
                    <div class="col-md-6 col-lg-4 py-0 mt-4 mt-lg-0">
                        <div class="background-white pb-4 h-100 radius-secondary">
                            <img class="w-100 radius-tr-secondary radius-tl-secondary" src="<?php echo base_url(); ?>assets/images/mixross-event.jpg"
                                alt="Featured Image" />
                            <div class="px-4 pt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <a href="news.html">
                                        <h5 data-zanim='{"delay":0}'>遊びのプロと本気で遊ぶ企画！</h5>
                                    </a>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="color-7" data-zanim='{"delay":0.1}'>人・団体名</p>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim='{"delay":0.2}'>詳細文章</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="d-inline-block" data-zanim='{"delay":0.3}'>
                                        <a class="d-flex align-items-center" href="#">もっと詳しく
                                            <div class="overflow-hidden ml-2"
                                                data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                                <span class="d-inline-block">&xrarr;</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 py-0 mt-4 mt-lg-0">
                        <div class="background-white pb-4 h-100 radius-secondary">
                            <img class="w-100 radius-tr-secondary radius-tl-secondary" src="<?php echo base_url(); ?>assets/images/mixross-event.jpg"
                                alt="Featured Image" />
                            <div class="px-4 pt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <a href="news.html">
                                        <h5 data-zanim='{"delay":0}'>就活相談会！</h5>
                                    </a>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="color-7" data-zanim='{"delay":0.1}'>人・団体名</p>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim='{"delay":0.2}'>詳細文章</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="d-inline-block" data-zanim='{"delay":0.3}'>
                                        <a class="d-flex align-items-center" href="#">もっと詳しく
                                            <div class="overflow-hidden ml-2"
                                                data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                                <span class="d-inline-block">&xrarr;</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 py-0 mt-4 mt-lg-0">
                        <div class="background-white pb-4 h-100 radius-secondary">
                            <img class="w-100 radius-tr-secondary radius-tl-secondary" src="<?php echo base_url(); ?>assets/images/mixross-event.jpg"
                                alt="Featured Image" />
                            <div class="px-4 pt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <a href="news.html">
                                        <h5 data-zanim='{"delay":0}'>【1,2年⽣限定】就活相談会！</h5>
                                    </a>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="color-7" data-zanim='{"delay":0.1}'>人・団体名</p>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim='{"delay":0.2}'>詳細文章</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="d-inline-block" data-zanim='{"delay":0.3}'>
                                        <a class="d-flex align-items-center" href="#">もっと詳しく
                                            <div class="overflow-hidden ml-2"
                                                data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                                <span class="d-inline-block">&xrarr;</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 py-0 mt-4 mt-lg-0">
                        <div class="background-white pb-4 h-100 radius-secondary">
                            <img class="w-100 radius-tr-secondary radius-tl-secondary" src="<?php echo base_url(); ?>assets/images/mixross-event.jpg"
                                alt="Featured Image" />
                            <div class="px-4 pt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <a href="news.html">
                                        <h5 data-zanim='{"delay":0}'>スキルアップセミナー</h5>
                                    </a>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="color-7" data-zanim='{"delay":0.1}'>人・団体名</p>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim='{"delay":0.2}'>詳細文章</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="d-inline-block" data-zanim='{"delay":0.3}'>
                                        <a class="d-flex align-items-center" href="#">もっと詳しく
                                            <div class="overflow-hidden ml-2"
                                                data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                                <span class="d-inline-block">&xrarr;</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 py-0 mt-4 mt-lg-0">
                        <div class="background-white pb-4 h-100 radius-secondary">
                            <img class="w-100 radius-tr-secondary radius-tl-secondary" src="<?php echo base_url(); ?>assets/images/mixross-event.jpg"
                                alt="Featured Image" />
                            <div class="px-4 pt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <a href="news.html">
                                        <h5 data-zanim='{"delay":0}'>自己分析</h5>
                                    </a>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="color-7" data-zanim='{"delay":0.1}'>人・団体名</p>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim='{"delay":0.2}'>詳細文章</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="d-inline-block" data-zanim='{"delay":0.3}'>
                                        <a class="d-flex align-items-center" href="#">もっと詳しく
                                            <div class="overflow-hidden ml-2"
                                                data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                                <span class="d-inline-block">&xrarr;</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4 py-0 mt-4 mt-lg-0">
                        <div class="background-white pb-4 h-100 radius-secondary">
                            <img class="w-100 radius-tr-secondary radius-tl-secondary" src="<?php echo base_url(); ?>assets/images/mixross-event.jpg"
                                alt="Featured Image" />
                            <div class="px-4 pt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <a href="news.html">
                                        <h5 data-zanim='{"delay":0}'>サマーインターン攻略法！</h5>
                                    </a>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="color-7" data-zanim='{"delay":0.1}'>人・団体名</p>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="mt-3" data-zanim='{"delay":0.2}'>詳細文章</p>
                                </div>
                                <div class="overflow-hidden">
                                    <div class="d-inline-block" data-zanim='{"delay":0.3}'>
                                        <a class="d-flex align-items-center" href="#">もっと詳しく
                                            <div class="overflow-hidden ml-2"
                                                data-zanim='{"from":{"opacity":0,"x":-30},"to":{"opacity":1,"x":0},"delay":0.8}'>
                                                <span class="d-inline-block">&xrarr;</span>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12 py-0 mt-4 mt-lg-0" style="text-align: center">
                        <div class="px-4 pt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <div class="zopacity" data-zanim='{"delay":0.2}'>
                                    <a class="btn btn-primary mr-3 mt-3" href="micros_event.html">もっとみる
                                        <span class="fa fa-chevron-right ml-2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Section2 イベント End -->

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