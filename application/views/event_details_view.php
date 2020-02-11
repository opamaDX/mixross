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

        <?php foreach($event as $row): ?>
            <section class="background-11 ">
                <div class="container">
                    <div class="row">
                        <div class="col-12 mt-6 mb-4">
                            <div class="overflow-hidden" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <h4 data-zanim='{"delay":0.1}'><?php echo $row['title']; ?></h4>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-12">
                                    <img class="radius-tr-secondary radius-tl-secondary" src="<?php echo base_url(); ?>assets/upload_images/<?php echo $row['file_path']; ?>" style="width: 1248px;"alt="">
                                </div>
                                <div class="col-12">
                                    <div class="background-white p-5 radius-secondary">
                                        <?php echo nl2br($row['content']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center ml-auto mt-5 mt-lg-0">
                            <div class="row px-2">
                                <div class="col">
                                    <div class="background-white p-5 radius-secondary">
                                        <div class="overflow-hidden" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                            <img class="radius-round" data-zanim='{"delay":0}' src="assets/images/portrait-8.jpg" alt="">
                                            <h5 class="text-capitalize mt-3 mb-0" data-zanim='{"delay":0.1}'>thomas been</h5>
                                            <p class="mb-0 mt-3" data-zanim='{"delay":0.2}'>Flattering high rise easy care flared fit - cut straight leg that flares at the ankle comfy tight. Regular fit viscose elastane leather black wool.</p>
                                            <div class="pt-4" data-zanim='{"delay":0.3}'>
                                                <a class="d-inline-block" href="#">
                                                    <span class="fa fa-linkedin-square fs-2 mx-2 color-8"></span>
                                                </a>
                                                <a class="d-inline-block" href="#">
                                                    <span class="fa fa-twitter-square fs-2 mx-2 color-8"></span>
                                                </a>
                                                <a class="d-inline-block" href="#">
                                                    <span class="fa fa-facebook-square fs-2 mx-2 color-8"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-5 px-2">
                                <div class="col">
                                    <h5 class="mb-3">Related Articles</h5>
                                    <div class="background-white pb-7 radius-secondary">
                                        <div class="owl-carousel owl-theme owl-nav-outer owl-dot-round mt-4" data-options='{"items":1}'>
                                            <div class="item">
                                                <div class="background-white pb-4 h-100 radius-secondary">
                                                    <img class="w-100 radius-tr-secondary radius-tl-secondary" src="assets/images/9.jpg" alt="Featured Image">
                                                    <div class="px-4 pt-4">
                                                        <a href="news.html">
                                                            <h5>Tax impacts of lease mean accounting change</h5>
                                                        </a>
                                                        <p class="color-7">By Paul O'Sullivan</p>
                                                        <p class="mt-3">HMRC released a consultation document to flag some potential tax impacts that a forthcoming change...</p>
                                                        <a href="#">Learn More &xrarr;</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4">
                        <form action="<?php echo site_url('event_reserve'); ?>" method="post">
                            <input type="hidden" name="event_id" value="<?php echo $row['id']; ?>">
                            <button class="btn btn-primary btn-block" name="reserve">参加予約</button>
                        </form>
                    </div>
                    <!--/.row-->
                </div>
                <!--/.container-->
            </section>
        <?php endforeach; ?>
    </main>

        <!-- Section3 公式SNS Start -->
        <section style="background-color: white;">
            <?php include(dirname(__FILE__)."/parts/sns.php"); ?>
        </section>
        <!-- Section3 公式SNS End -->

        <!-- Footer Start -->
        <?php include(dirname(__FILE__)."/inc/footer.php"); ?>
        <!-- Footer End -->