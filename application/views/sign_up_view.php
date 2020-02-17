<?php
    include(dirname(__FILE__)."/attributes/sign_up_data.php");
    include(dirname(__FILE__)."/inc/header.php");
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
                            <h4 class="text-uppercase fs-0 fs-md-1">新規アカウント登録</h4>

                            <?php
                                echo form_open('sign_up_ctrl/conf',$form_open_data);
                            ?>
                            <div class="row align-items-center">

                                <h5 class="col-12 border-bottom">
                                    <span>個人情報</span>
                                </h5>
                                <div class="color-7 col-12 small mt-4">
                                    <span class="text-danger">※</span>は必須項目です。
                                </div>

                                <!-- row1 姓名-->
                                <div class="color-7 col-12 small mt-4">
                                    お名前<span class="text-danger bold">※</span>
                                </div>
                                <div class="col-6 mt-4"><?php echo form_input($input_last_name_data); ?></div>
                                <div class="col-6 mt-4"><?php echo form_input($input_first_name_data); ?></div>

                                <!-- row2 セイメイ-->
                                <div class="color-7 col-12 small mt-4">フリガナ<span class="text-danger bold">※</span></div>
                                <div class="col-6 mt-4"><?php echo form_input($input_last_kana_name_data); ?></div>
                                <div class="col-6 mt-4"><?php echo form_input($input_first_kana_name_data); ?></div>

                                <?php echo form_error('last_kana_name',' <div class="col-6 mt-3 small text-danger"> ','</div>'); ?>
                                <?php echo form_error('first_kana_name',' <div class="col-6 mt-3 small text-danger"> ','</div>'); ?>

                                <!-- row3 性別-->
                                <div class="color-7 col-12 small mt-4">性別<span class="text-danger bold">※</span></div>
                                <div class="col-12 mt-4">
                                    <?php echo form_dropdown('gender',$select_gender_data,'initial','class="form-control form-control-lg"');?>
                                </div>

                                <?php echo form_error('gender',' <div class="col-12 mt-3 small text-danger"> ','</div>'); ?>

                                <!-- ro4 生年月日 -->
                                <div class="color-7 col-12 small mt-4">
                                    生年月日
                                    <span class="text-danger bold">※</span>
                                </div>
                                <div class="col-3 mt-4">
                                    <?php echo form_dropdown('year',$select_year_data,$year,'class="form-control form-control-lg"'); ?>
                                </div>年
                                <div class="col-3 mt-4">
                                    <?php echo form_dropdown('month',$select_month_data,$month,'class="form-control form-control-lg"'); ?>
                                </div>月
                                <div class="col-3 mt-4">
                                    <?php echo form_dropdown('day',$select_day_data,$day,'class="form-control form-control-lg"'); ?>
                                </div>日

                                <?php echo form_error('year',' <div class="col-3 mt-3 small text-danger">','</div>'); ?>
                                <?php echo form_error('month',' <div class="col-3 mt-3 ml-3 small text-danger">','</div>'); ?>
                                <?php echo form_error('day',' <div class="col-3 mt-3 ml-3 small text-danger">','</div>'); ?>

                                <!-- row5 電話番号-->
                                <div class="color-7 col-12 small mt-4">電話番号<span class="text-danger bold">※</span></div>
                                <div class="col-12 mt-4"><?php echo form_input($input_tell_data); ?></div>

                                <?php echo form_error('tell',' <div class="col-12 mt-3 small text-danger"> ','</div>'); ?>

                                <!-- row6 メールアドレス -->
                                <div class="color-7 col-12 small mt-4">メールアドレス<span class="text-danger bold">※</span>
                                </div>
                                <div class="col-12 mt-4"><?php echo form_input($input_email_data); ?></div>

                                <?php echo form_error('email',' <div class="col-12 mt-3 small text-danger"> ','</div>'); ?>

                                <!-- row7 パスワード-->
                                <div class="color-7 col-12 small mt-4">
                                    パスワード<span class="text-danger bold">※</span>
                                </div>
                                <div class="col-12 mt-4"><?php echo form_password($form_pass_data); ?></div>

                                <!-- row8 確認用パスワード-->
                                <div class="color-7 col-12 small mt-4">
                                    確認用パスワード<span class="text-danger bold">※</span>
                                </div>
                                <div class="col-12 mt-4"><?php echo form_password($form_check_pass_data); ?></div>
                                <?php echo form_error('pass',' <div class="col-12 mt-3 small text-danger"> ','</div>'); ?>

                                <!-- row9 学校の情報 -->
                                <h5 class="col-12 border-bottom mt-5">
                                    学校情報
                                </h5>
                                <div class="color-7 col-12 small mt-4"><span class="text-danger">※</span>は必須項目です。</div>

                                <!-- row10 学校名-->
                                <div class="color-7 col-12 small mt-4">大学名<span class="text-danger bold">※</span></div>
                                <div class="col-12 mt-4"><?php echo form_input($input_university_data); ?></div>

                                <!-- row11 学部名-->
                                <div class="color-7 col-12 small mt-4">学部名<span class="text-danger bold">※</span></div>
                                <div class="col-12 mt-4"><?php echo form_input($input_faculty_data); ?></div>

                                <!-- row12 学科名-->
                                <div class="color-7 col-12 small mt-4">学科名<span class="text-danger bold">※</span></div>
                                <div class="col-12 mt-4"><?php echo form_input($input_department_data); ?></div>

                                <!-- ro13 卒業予定年 -->
                                <div class="color-7 col-12 small mt-4">卒業予定年<span class="text-danger bold">※</span>
                                </div>
                                <div class="col-5 mt-4">
                                    <?php echo form_dropdown('graduate_year',$select_graduate_year_data,$graduate_year,'class="form-control form-control-lg"'); ?>
                                </div>年
                                <div class="col-5 mt-4">
                                    <?php echo form_dropdown('graduate_month',$select_graduate_month_data,$graduate_month,'class="form-control form-control-lg"'); ?>
                                </div>月

                                <?php echo form_error('graduate_year',' <div class="col-5 mt-3 small text-danger"> ','</div>'); ?>
                                <?php echo form_error('graduate_month',' <div class="col-5 mt-3 ml-3 small text-danger"> ','</div>'); ?>

                                <!-- row14 高校名-->
                                <div class="color-7 col-12 small mt-4">出身高校名<span class="text-danger bold">※</span>
                                </div>
                                <div class="col-12 mt-4"><?php echo form_input($input_high_school_data); ?></div>

                                <!-- row15 ゼミ・研究室-->
                                <div class="color-7 col-12 small mt-4">
                                    ゼミ・研究室
                                </div>
                                <div class="col-12 mt-4"><?php echo form_input($input_seminar_data); ?></div>

                                <!-- row16 クラブ・サークル-->
                                <div class="color-7 col-12 small mt-4">
                                    クラブ・サークル
                                </div>
                                <div class="col-12 mt-4"><?php echo form_input($input_club_data); ?></div>
                                <div></div>

                                <!-- row17 チェックボックス-->
                                <div class="col-md-6 mt-3">
                                    <?php echo form_checkbox($form_checkbox_data); ?>
                                    <span class="color-7">利用規約に同意する</span>
                                </div>

                                <!-- row8 submitボタン -->
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
    <script src="<?php echo base_url(); ?>assets/lib/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/CustomEase.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/config.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/zanimation.js"></script>
    <script src="<?php echo base_url(); ?>assets/lib/flexslider/jquery.flexslider-min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/core.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
    <!-- Myscript  -->
    <script src="<?php echo base_url(); ?>assets/js/sign_up.js"></script>
    <!-- Footer End -->

</body>

</html>