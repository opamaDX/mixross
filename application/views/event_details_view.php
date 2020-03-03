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
                        <div class="col-12 mt-6 mb-4 mt-lg-7">
                            <div class="overflow-hidden" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                <h4 data-zanim='{"delay":0.1}' class="border-bottom"><?php echo $row['title']; ?></h4>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-12">
                                    <img class="radius-tr-secondary radius-tl-secondary" src="<?php echo base_url(); ?>assets/upload_images/<?php echo $row['file_path']; ?>" style="width: 1248px;"alt="">
                                </div>
                                <div class="col-12 pt-2">
                                    <div class="background-white p-5">
                                        <?php echo nl2br($row['content']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 text-center ml-auto mt-5 mt-lg-0">
                            <div class="row px-2">
                                <div class="col">
                                    <div class="background-white pr-5 pb-5 pl-5 pt-4 radius-secondary">
                                        <div class="overflow-hidden" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                            <h5 class="text-capitalize mt-3 mb-0" data-zanim='{"delay":0.1}'>みくろすでできること </h5>
                                            <p class="text-capitalize mt-3 mb-0" data-zanim='{"delay":0.1}'>Wi-Fi・コンセント使いたい放題</p>
                                            <p class="text-capitalize mt-3 mb-0" data-zanim='{"delay":0.1}'>ミーティングができる</p>
                                            <p class="text-capitalize mt-3 mb-0" data-zanim='{"delay":0.1}'>イベントの開催</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col">
                                    <div class="background-white pr-5 pb-5 pl-5 pt-5 radius-secondary">
                                        <div class="overflow-hidden" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                                            <p class="text-capitalize mb-0" data-zanim='{"delay":0.1}'>
                                                イベントに参加した人達から満足しました。とうい声を多数よせてもらっています。
                                                皆さん気軽にぜひお友達と参加してみて下さい!!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-4">
                        <form action="<?php echo site_url('event_reserve'); ?>" method="get">
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