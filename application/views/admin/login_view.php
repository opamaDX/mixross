<?php
    include(dirname(__FILE__)."/../inc/header.php"); 
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
                            <h4 class="text-uppercase fs-0 fs-md-1">管理者画面にログイン</h4>
                            <form class="text-left mt-4" method="post" action="admin_ctrl/login">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <div class="input-group-addon background-11 fs-2">
                                                <span class="ion-ios-person-outline"></span>
                                            </div>
                                            <input class="form-control" name='id' type="text" placeholder="管理者ID"
                                                aria-label="Text input with dropdown button" />
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2 mt-sm-4">
                                        <div class="input-group">
                                            <div class="input-group-addon background-11 fs-2">
                                                <span class="ion-ios-locked-outline"></span>
                                            </div>
                                            <input class="form-control" type="Password" name='pass' placeholder="パスワード"
                                                aria-label="Text input with dropdown button" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row align-items-center mt-3">
                                    <div class="col-6">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" />
                                            <span class="color-7">ログインID,パスワードを記憶する</span>
                                        </label>
                                    </div>
                                    <div class="col-6 mt-2 mt-sm-3">
                                        <button class="btn btn-primary btn-block" type="submit">ログイン</button>
                                    </div>
                                </div>
                            </form>
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
