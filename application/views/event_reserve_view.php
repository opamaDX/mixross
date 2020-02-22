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

        <section class="pt-9">
            <div class="container">
                <div class="mb-6">
                    <h2 class="mb-4">参加予約を確定してもいいですか？</h2>
                    <h2>参加予約を確定した後にメールを送信します</h2>
                </div>
                <p id="send_reserve" class="lead text-center"></p>
                <?php echo form_open('event_reserve/reserve_confirm', 'id="form"'); ?>
                    <button id="reserve_confirm" class="btn btn-primary btn-block" name="reserve_confirm">参加予約確定</button>
                <?php echo form_close(); ?>
            </div>
        </section>

        <!-- Section3 公式SNS Start -->
        <section style="background-color: white;">
            <?php include(dirname(__FILE__)."/parts/sns.php"); ?>
        </section>
        <!-- Section3 公式SNS End -->

        <!-- Footer Start -->
        <?php include(dirname(__FILE__)."/inc/footer.php"); ?>
        <!-- Footer End -->