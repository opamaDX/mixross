<?php
    include(dirname(__FILE__)."/attributes/sign_up_data.php");
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
            <div class="background-holder overlay overlay-1"
                style="background-image:url(<?php echo base_url(); ?>assets/images/mixross-sign.jpg);">
            </div>
            <!--/.background-holder-->
            <div class="container">
                <div class="row h-100vh align-items-center">
                    <div class="col-md-9 col-lg-6 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="background-white radius-secondary p-4 p-md-5 mt-5" data-zanim='{"delay":0.1}'>
                            <h4 class="text-uppercase fs-0 fs-md-1">新規アカウント登録</h4>

                            <?php
                                //form Start
                                echo form_open('',$form_open_data);
                            ?>
                            <div class="row align-items-center">

                                <!-- row1 姓名-->
                                <div class="col-6"><?php echo form_input($input_last_name_data); ?></div>
                                <div class="col-6"><?php echo form_input($input_first_name_data); ?></div>
                                <!-- row2 セイメイ-->
                                <div class="col-6 mt-4"><?php echo form_input($input_last_kana_name_data); ?></div>
                                <div class="col-6 mt-4"><?php echo form_input($input_first_kana_name_data); ?></div>
                                <!-- row3 性別-->
                                <div class="col-12 mt-4"><?php echo form_dropdown('gender',$select_gender_data,'initial','class="form-control form-control-lg"');?></div>
                                <!-- ro4 生年月日 -->
                                



                                <div class="col-12 mt-4">
                                    <input class="form-control" type="email" placeholder="メールアドレス"
                                        aria-label="Text input with dropdown button"> </div>
                                <div class="col-12 mt-4">
                                    <input class="form-control" type="Password" placeholder="パスワード"
                                        aria-label="Text input with dropdown button"> </div>
                                <div class="col-12 mt-4">
                                    <input class="form-control" type="Password" placeholder="確認のため、もう一度パスワードを入力してください"
                                        aria-label="Text input with dropdown button"> </div>
                            </div>
                            <div class="row align-items-center mt-3">
                                <div class="col-md-6 mt-3">
                                    <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox">
                                        <span class="color-7">利用規約に同意する</span>
                                    </label>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <button class="btn btn-primary btn-block" type="submit">アカウントを作成</button>
                                </div>
                            </div>
                            <?php
                                //form End
                                echo form_close();
                            ?>



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