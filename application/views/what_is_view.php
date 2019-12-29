<?php 
    include(dirname(__FILE__)."/inc/header.php");
    include( dirname(__FILE__)."/attributes/nav_menu_data.php");
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
                                            data-zanim='{"delay":0.1}'>みくろすとは</p>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Section1 トップ画面 End -->

        <!-- Section2 みくろすとは Start -->
        <section class="background-white  text-center" style="position: relative; padding: 8.5rem 0; ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-6">
                        <h3 class="color-primary fs-2 fs-lg-3">みくろすとは</h3>
                        <hr class="short"
                            data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                            data-zanim-trigger="scroll">
                    </div>
                </div>
                <div class="row mt-4 mt-md-5">
                    <div class="col-sm-12 col-lg-12 mt-4" data-zanim-timeline='{"delay":0.1}'
                        data-zanim-trigger="scroll">
                        <h5 class="mt-4" data-zanim='{"delay":0.1}'>学生生活にもっと予期せぬ出会いを</h5>
                        <p class="mb-0 mt-3 px-3 " data-zanim='{"delay":0.2}' style="line-height: 3.45;">
                            ⼈⽣の８割は、実は予期しない「偶然」によって形成されています。<br>
                            学外活動で出会う社会⼈、留学先で知り合った友⼈、<br>
                            本屋でたまたま⼿に取った本や偶然⽴ち寄ったイベント。<br>
                            「ヒト」「モノ」「コト」<br>
                            様々な出会いが私たちにきっかけを与えてくれます。<br>
                            そんな「きっかけ」が学⽣⽣活ではもっともっと溢れていていいと思うの<br>
                            です。ここ愛媛においては圧倒的に少なすぎる。<br>
                            だからみくろすをつくりました。<br>
                            ⽇常の中に「ちょっとした出逢い」を。<br>
                            授業、ゼミ、サークル、バイト…<br>
                            みくろすでは、決まり切った⼤学⽣活に、<br>
                            いつもとは違う「出逢い」と「きっかけ」を提供します。<br>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section2 みくろすとは End -->

        <!-- Section3 公式SNS Start -->
        <section style="background-color: white;">
            <?php include(dirname(__FILE__)."/parts/sns.php"); ?>
        </section>
        <!-- Section3 公式SNS End -->

        <!-- Footer Start -->
        <?php include(dirname(__FILE__)."/inc/footer.php"); ?>
        <!-- Footer End -->