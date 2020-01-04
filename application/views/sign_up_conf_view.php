<?php
    include(dirname(__FILE__)."/attributes/sign_up_data.php");
    include(dirname(__FILE__)."/inc/header.php");
    echo $email;
?>

<body>
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
                <div class="row h-300vh align-items-center">
                    <div class="col-md-9 col-lg-10 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="background-white radius-secondary p-4 p-md-5 mt-5" data-zanim='{"delay":0.1}'>
                            <h4 class="text-uppercase fs-0 fs-md-1">アカウント登録情報確認</h4>

                            <?php
                                //form Start
                                echo form_open('sign_up_ctrl/indicate_post',$form_open_data);
                            ?>
                            <div class="row align-items-center">
                                <h5 class="col-12 border-bottom">個人情報</span></h5>

                                <!-- row1 姓名-->
                                <div class="color-7 col-12 small mt-4">お名前</div>
                                <div class="col-6 mt-4"><?php echo $last_name; ?></div>
                                <div class="col-6 mt-4"><?php echo $first_name; ?></div>

                                <!-- row2 セイメイ-->
                                <div class="color-7 col-12 small mt-4">フリガナ</div>
                                <div class="col-6 mt-4"><?php echo $last_kana_name; ?></div>
                                <div class="col-6 mt-4"><?php echo $first_kana_name; ?></div>

                                <!-- row3 性別-->
                                <div class="color-7 col-12 small mt-4">性別</div>
                                <div class="col-12 mt-4">
                                    <?php echo $gender;?>
                                </div>

                                <!-- ro4 生年月日 -->
                                <div class="color-7 col-12 small mt-4">生年月日</div>
                                <div class="col-3 mt-4">
                                    <?php echo $year; ?>
                                </div>年
                                <div class="col-3 mt-4">
                                    <?php echo $month; ?>
                                </div>月
                                <div class="col-3 mt-4">
                                    <?php echo $day; ?>
                                </div>日

                                <!-- row5 メールアドレス -->
                                <div class="color-7 col-12 small mt-4">メールアドレス</div>
                                <div class="col-12 mt-4"><?php echo $email; ?></div>

                                <!-- row6 パスワード-->
                                <div class="color-7 col-12 small mt-4">パスワード</div>
                                <div class="col-12 mt-4"><?php echo $pass; ?></div>

                                <!-- row7 確認用パスワード-->
                                <div class="color-7 col-12 small mt-4">確認用パスワード</div>
                                <div class="col-12 mt-4"><?php echo $check_pass ?></div>

                                <!-- row7 確認ボタン-->
                                <div class="col-md-6 mt-3"><?php echo form_button($form_button_data); ?></div>

                                <!-- row8 submitボタン-->
                                <div class="col-md-6 mt-3"><?php echo form_button($form_button_data); ?></div>

                                <?php
                                    //form End
                                    echo form_close();
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
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