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
        <section>
            <div class="flexslider flexslider-simple" style="min-height: 517px;">
                <ul class="slides">
                    <li data-zanim-timeline="{}">
                        <div class="py-0">
                            <div class="background-holder"
                                style="background-image:url(<?php echo base_url(); ?>assets/images/mixross_cando_back.jpg);"> </div>
                            <div class="container">
                                <div class="row align-items-center py-8" data-inertia='{"weight":1.5}'>
                                    <div class="col-sm-8 col-lg-7 px-5 px-sm-3">
                                        <h1 class="color-primary mt-4 mb-5 lh-2 fs-1 fs-md-2 zopacity title-font"
                                            data-zanim='{"delay":0.1}'>みくろすトップページ</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- Section1 トップ画面 End -->

        <!-- Section2 みくろすとは Start -->
        <section class="background-white  text-center">
            <div class="container" style="line-height: 2.25;">
                <div class="row justify-content-center">
                    <div class="col-10 col-md-6">
                        <h3 class="color-primary fs-2 fs-lg-3" style="font-size: calc(93.5% + 0.5vw) !important">みくろすとは
                        </h3>
                        <hr class="short" 　
                            data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                            data-zanim-trigger="scroll">
                    </div>
                </div>
                <div class="row mt-4 mt-md-5">
                    <div class="col-sm-12 col-lg-12 mt-4" data-zanim-timeline='{"delay":0.1}'
                        data-zanim-trigger="scroll">
                        <h5 class="mt-4" data-zanim='{"delay":0.1}' style="font-size: calc(112.5% + 0.5vw);">
                            学生の「あったらいいな」が叶う場所</h5>
                        <p class="mb-0 mt-3 px-3 " data-zanim='{"delay":0.2}' style="font-size: calc(88.5% + 0.5vw)">
                            皆さんが普段の学校⽣活の中で「あー、これあったらいいのに！」と思うものがみくろすには揃っています。<br>きちんと繋がるwi-fi、空きコマの中途半端な時間を潰せる場所、⾬の⽇のヘアセットでコテが欲しい。。<br>そんな「あったらいいな」を叶えます。
                        </p>
                        <div class="overflow-hidden">
                            <div class="zopacity" data-zanim='{"delay":0.2}'>
                                <a class="btn btn-primary mr-3 mt-3" href="what_is_micros.html">もっと詳しく
                                    <span class="fa fa-chevron-right ml-2"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section2 みくろすとは End -->

        <!-- Section3 イベント Start -->
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
                    <!-- イベント -->
                    <?php $i = 0; ?>
                    <?php foreach($event as $row): ?>
                        <?php if($i < 6): ?>
                            <a href="<?php echo site_url('main_ctrl/load_page_event_details?id='.$row['id']); ?>">
                            <div class="col-md-6 col-lg-4 py-0 mt-4 mt-lg-3">
                                <div class="background-white pb-4 h-100 radius-secondary">
                                    <img class="w-100 radius-tr-secondary radius-tl-secondary"
                                        src="<?php echo base_url(); ?>assets/upload_images/<?php echo $row['file_path']; ?>" alt="Featured Image" />
                                    <div class="px-4 pt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                        <div class="overflow-hidden">
                                            <a href="<?php echo site_url('main_ctrl/load_page_event_details?id='.$row['id']); ?>">
                                                <h5 data-zanim='{"delay":0}'><?php echo $row['title']; ?></h5>
                                            </a>
                                        </div>
                                        <div class="mb-2 overflow-hidden">
                                            <span class="mt-3" data-zanim='{"delay":0.2}'>開催日</span>
                                            <strong data-zanim='{"delay":0.2}'><?php echo  $row['event_hold']; ?></strong>
                                        </div>
                                        <div class="overflow-hidden">
                                            <div class="d-inline-block" data-zanim='{"delay":0.3}'>
                                                <a class="d-flex align-items-center" href="<?php echo site_url('main_ctrl/load_page_event_details?id='.$row['id']); ?>">もっと詳しく
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
                            </a>
                            <?php $i++; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                    <!-- イベント終了 -->

                    <div class="col-md-12 col-lg-12 py-0 mt-4 mt-lg-0" style="text-align: center">
                        <div class="px-4 pt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <div class="zopacity" data-zanim='{"delay":0.2}'>
                                    <a class="btn btn-primary mr-3 mt-3" href="<?php echo site_url('main_ctrl/load_page_event'); ?>">もっとみる
                                        <span class="fa fa-chevron-right ml-2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Section3 イベント End -->

        <!-- Section4 みくろすでできること Start -->
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
        <!-- Section4 みくろすでできること End -->

        <!-- Section5 みくろすにあるもの Start -->
        <section class="text-center">
            <div class="container">
                <h3 style="font-size: calc(93.5% + 0.5vw) !important">みくろすにあるもの</h3>
                <hr class="short"
                    data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                    data-zanim-trigger="scroll" />

                <div class="row">

                    <div class="col-6 col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="px-3 py-4 px-lg-4">
                            <div class="overflow-hidden">
                                <span class="icon-Double-Circle fs-3 color-primary fw-600"
                                    data-zanim='{"delay":0}'></span>
                            </div>
                            <div class="overflow-hidden">
                                <h5 class="mt-3" data-zanim='{"delay":0.1}'>フリードリンク</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="px-3 py-4 px-lg-4">
                            <div class="overflow-hidden">
                                <span class="icon-Mail-2 fs-3 color-primary fw-600" data-zanim='{"delay":0}'></span>
                            </div>
                            <div class="overflow-hidden">
                                <h5 class="mt-3" data-zanim='{"delay":0.1}'>Wi-Fi</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="px-3 py-4 px-lg-4">
                            <div class="overflow-hidden">
                                <span class="icon-Archery-2 fs-3 color-primary fw-600" data-zanim='{"delay":0}'></span>
                            </div>
                            <div class="overflow-hidden">
                                <h5 class="mt-3" data-zanim='{"delay":0.1}'>コンセント</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="px-3 py-4 px-lg-4">
                            <div class="overflow-hidden">
                                <span class="icon-Globe-2 fs-3 color-primary fw-600" data-zanim='{"delay":0}'></span>
                            </div>
                            <div class="overflow-hidden">
                                <h5 class="mt-3" data-zanim='{"delay":0.1}'>本・漫画</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="px-3 py-4 px-lg-4">
                            <div class="overflow-hidden">
                                <span class="icon-Money-2 fs-3 color-primary fw-600" data-zanim='{"delay":0}'></span>
                            </div>
                            <div class="overflow-hidden">
                                <h5 class="mt-3" data-zanim='{"delay":0.1}'>集中室</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-md-6 col-lg-4 mt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="px-3 py-4 px-lg-4">
                            <div class="overflow-hidden">
                                <span class="icon-Bar-Chart fs-3 color-primary fw-600" data-zanim='{"delay":0}'></span>
                            </div>
                            <div class="overflow-hidden">
                                <h5 class="mt-3" data-zanim='{"delay":0.1}'>学生サポーター</h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Section5 みくろすにあるもの End -->

        <!-- Section6 メンバー Start -->
        <section class="background-11  text-center">
            <div class="container">

                <div class="row mb-6">
                    <div class="col">
                        <h3 class="fs-2 fs-md-3" style="font-size: calc(93.5% + 0.5vw) !important"> メンバー</h3>
                        <hr class="short"
                            data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                            data-zanim-trigger="scroll">
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="background-white pb-4 h-100 radius-secondary">
                            <img class="mb-4 radius-tr-secondary radius-tl-secondary"
                                src="<?php echo base_url(); ?>assets/images/mixross-member.jpg" alt="Profile Picture" />
                            <div class="px-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim='{"delay":0}'>名前</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="fw-400 color-7" data-zanim='{"delay":0.1}'>マスター</h6>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="py-3 mb-0" data-zanim='{"delay":0.2}'>紹介文</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mt-4 mt-sm-0">
                        <div class="background-white pb-4 h-100 radius-secondary">
                            <img class="mb-4 radius-tr-secondary radius-tl-secondary"
                                src="<?php echo base_url(); ?>assets/images/mixross-member.jpg" alt="Profile Picture" />
                            <div class="px-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim='{"delay":0}'>名前</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="fw-400 color-7" data-zanim='{"delay":0.1}'>マスター</h6>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="py-3 mb-0" data-zanim='{"delay":0.2}'>紹介文</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mt-4 mt-lg-0">
                        <div class="background-white pb-4 h-100 radius-secondary">
                            <img class="mb-4 radius-tr-secondary radius-tl-secondary"
                                src="<?php echo base_url(); ?>assets/images/mixross-member.jpg" alt="Profile Picture" />
                            <div class="px-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim='{"delay":0}'>名前</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="fw-400 color-7" data-zanim='{"delay":0.1}'>マスター</h6>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="py-3 mb-0" data-zanim='{"delay":0.2}'>紹介文</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mt-4">
                        <div class="background-white pb-4 h-100 radius-secondary">
                            <img class="mb-4 radius-tr-secondary radius-tl-secondary"
                                src="<?php echo base_url(); ?>assets/images/mixross-member.jpg" alt="Profile Picture" />
                            <div class="px-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim='{"delay":0}'>名前</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="fw-400 color-7" data-zanim='{"delay":0.1}'>マスター</h6>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="py-3 mb-0" data-zanim='{"delay":0.2}'>紹介文</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mt-4">
                        <div class="background-white pb-4 h-100 radius-secondary">
                            <img class="mb-4 radius-tr-secondary radius-tl-secondary"
                                src="<?php echo base_url(); ?>assets/images/mixross-member.jpg" alt="Profile Picture" />
                            <div class="px-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim='{"delay":0}'>名前</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="fw-400 color-7" data-zanim='{"delay":0.1}'>マスター</h6>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="py-3 mb-0" data-zanim='{"delay":0.2}'>紹介文</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4 mt-4">
                        <div class="background-white pb-4 h-100 radius-secondary">
                            <img class="mb-4 radius-tr-secondary radius-tl-secondary"
                                src="<?php echo base_url(); ?>assets/images/mixross-member.jpg" alt="Profile Picture" />
                            <div class="px-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <div class="overflow-hidden">
                                    <h5 data-zanim='{"delay":0}'>名前</h5>
                                </div>
                                <div class="overflow-hidden">
                                    <h6 class="fw-400 color-7" data-zanim='{"delay":0.1}'>マスター</h6>
                                </div>
                                <div class="overflow-hidden">
                                    <p class="py-3 mb-0" data-zanim='{"delay":0.2}'>紹介文</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-12 py-0 mt-4 mt-lg-0" style="text-align: center">
                        <div class="px-4 pt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <div class="zopacity" data-zanim='{"delay":0.2}'>
                                    <a class="btn btn-primary mr-3 mt-3" href="micros_event.html">一覧をみる
                                        <span class="fa fa-chevron-right ml-2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Section6 メンバー End -->

        <!-- Section7 スポンサー企業 Start -->
        <section class="background-10 py-6">
            <div class="container">
                <h3 class="text-center fs-2 fs-md-3" style="font-size: calc(93.5% + 0.5vw) !important"> スポンサー企業</h3>
                <hr class="short"
                    data-zanim='{"from":{"opacity":0,"width":0},"to":{"opacity":1,"width":"4.20873rem"},"duration":0.8}'
                    data-zanim-trigger="scroll">

                <div class="row align-items-center" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                    <div class="col-4 col-md-2 my-3 overflow-hidden">
                        <img src="<?php echo base_url(); ?>assets/images/partner/mixross-logo.png" alt="" data-zanim="{}" />
                    </div>
                    <div class="col-4 col-md-2 my-3 overflow-hidden">
                        <img src="<?php echo base_url(); ?>assets/images/partner/mixross-logo.png" alt="" data-zanim="{}" />
                    </div>
                    <div class="col-4 col-md-2 my-3 overflow-hidden">
                        <img src="<?php echo base_url(); ?>assets/images/partner/mixross-logo.png" alt="" data-zanim="{}" />
                    </div>
                    <div class="col-4 col-md-2 my-3 overflow-hidden">
                        <img src="<?php echo base_url(); ?>assets/images/partner/mixross-logo.png" alt="" data-zanim="{}" />
                    </div>
                    <div class="col-4 col-md-2 my-3 overflow-hidden">
                        <img src="<?php echo base_url(); ?>assets/images/partner/mixross-logo.png" alt="" data-zanim="{}" />
                    </div>
                    <div class="col-4 col-md-2 my-3 overflow-hidden">
                        <img src="<?php echo base_url(); ?>assets/images/partner/mixross-logo.png" alt="" data-zanim="{}" />
                    </div>

                    <div class="col-md-12 col-lg-12 py-0 mt-4 mt-lg-0" style="text-align: center">
                        <div class="px-4 pt-4" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                            <div class="overflow-hidden">
                                <div class="zopacity" data-zanim='{"delay":0.2}'>
                                    <a class="btn btn-primary mr-3 mt-3" href="micros_event.html">詳しくはこちら
                                        <span class="fa fa-chevron-right ml-2"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- Section7 スポンサー企業 End -->

        <!-- Section8 公式SNS Start -->
        <section style="background-color: white;">
            <?php include(dirname(__FILE__)."/parts/sns.php"); ?>
        </section>
        <!-- Section8 公式SNS End -->

        <!-- Footer Start -->
        <?php include(dirname(__FILE__)."/inc/footer.php"); ?>
        <!-- Footer End -->