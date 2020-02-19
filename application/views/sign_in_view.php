<?php
    include(dirname(__FILE__)."/attributes/sign_in_data.php");
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
        <section class="text-center py-0">
            <div class="background-holder overlay overlay-2"
                style="background-image:url(<?php echo base_url(); ?>assets/images/mixross-sign.jpg);">
            </div>
            <!--/.background-holder-->
            <div class="container">
                <div class="row h-full align-items-center" style="min-height: 101vh;">
                    <div class="col-md-8 col-lg-5 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="background-white radius-secondary p-4 p-md-5 mt-5" data-zanim='{"delay":0.1}'>
                            <h4 class="text-uppercase fs-0 fs-md-1">みくろすにログイン</h4>
                            
                            <!-- 入力ミスがある場合 -->
                            <small id="error" style="color:red"></small>
                            
                            <?php echo form_open('sign_in_ctrl/login', $form_open_data, $form_hidden_data); ?>

                                <div class="row align-items-center">
                                    <!-- email -->
                                    <div class="col-12">
                                        <div class="input-group">
                                            <div class="input-group-addon background-11 fs-2">
                                                <span class="ion-ios-person-outline"></span>
                                            </div>
                                            <?php echo form_input($form_email_data); ?>
                                        </div>
                                    </div>

                                    <!-- password -->
                                    <div class="col-12 mt-2 mt-sm-4">
                                        <div class="input-group">
                                            <div class="input-group-addon background-11 fs-2">
                                                <span class="ion-ios-locked-outline"></span>
                                            </div>
                                             <?php echo form_password($form_password_data); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center mt-3">
                                    <!-- 新規登録 -->
                                    <div class="col-6 text-center">
                                        <?php echo anchor('main_ctrl/load_page_sign_up', '新規登録'); ?>
                                    </div>

                                    <!-- login_btn -->
                                    <div class="col-6 mt-2 mt-sm-3">
                                        <?php echo form_submit($form_login_btn_data); ?>
                                    </div>
                                </div>
                            <?php echo form_close(); ?>
                            <!-- form_end -->

                        </div>
                    </div>
                </div>
                <!--/.row-->
            </div>
            <!--/.container-->
        </section>

    </main>
    <!-- Footer Start -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/ajax.js"></script>
    <script src="<?php echo base_url() ?>assets/lib/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="<?php echo base_url() ?>assets/lib/CustomEase.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/config.js"></script>
    <script src="<?php echo base_url() ?>assets/js/zanimation.js"></script>
    <script src="<?php echo base_url() ?>assets/lib/flexslider/jquery.flexslider-min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/core.js"></script>
    <script src="<?php echo base_url() ?>assets/js/main.js"></script>
    <!-- Footer End -->
</body>

</html>
