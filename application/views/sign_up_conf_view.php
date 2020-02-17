<?php
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
        <section class="py-0">
            <div class="background-holder overlay overlay-1"
                style="background-image:url(<?php echo base_url(); ?>assets/images/mixross-sign.jpg);">
            </div>
            <!--/.background-holder-->
            <div class="container">
                <div class="row h-300vh">
                    <div class="col-md-9 col-lg-10 mx-auto" data-zanim-timeline="{}" data-zanim-trigger="scroll">
                        <div class="background-white radius-secondary p-4 p-md-5 mt-5" data-zanim='{"delay":0.1}'>
                            <h4 class="text-uppercase fs-0 fs-md-1 text-center">新規アカウント登録</h4>

                            <div class="row">
                                <h5 class="col-12 border-bottom">登録情報確認</h5>

                                <!-- row1 姓名-->
                                <div class="color-7 col-12 small mt-4">お名前</div>
                                <div class="col-12 mt-4"><?php echo $last_name." ".$first_name; ?></div>

                                <!-- row2 セイメイ-->
                                <div class="color-7 col-12 small mt-4">フリガナ</div>
                                <div class="col-12 mt-4"><?php echo $last_kana_name." ".$first_kana_name; ?></div>

                                <!-- row3 性別-->
                                <div class="color-7 col-12 small mt-4">性別</div>
                                <div class="col-12 mt-4">
                                    <?php echo $gender;?>
                                </div>

                                <!-- ro4 生年月日 -->
                                <div class="color-7 col-12 small mt-4">生年月日</div>
                                <div class="col-12 mt-4">
                                    <?php echo $year.'年'.$month.'月'.$day.'日'; ?>
                                </div>

                                <!-- ro5 電話番号 -->
                                <div class="color-7 col-12 small mt-4">電話番号</div>
                                <div class="col-12 mt-4">
                                    <?php echo $tell ?>
                                </div>

                                <!-- row6 メールアドレス -->
                                <div class="color-7 col-12 small mt-4">メールアドレス</div>
                                <div class="col-12 mt-4"><?php echo $email; ?></div>

                                <!-- row7 大学名 -->
                                <div class="color-7 col-12 small mt-4">大学名</div>
                                <div class="col-12 mt-4"><?php echo $university; ?></div>

                                <!-- row8 学部名 -->
                                <div class="color-7 col-12 small mt-4">学部名</div>
                                <div class="col-12 mt-4"><?php echo $faculty; ?></div>

                                <!-- row9 学科名 -->
                                <div class="color-7 col-12 small mt-4">学科名</div>
                                <div class="col-12 mt-4"><?php echo $department; ?></div>

                                <!-- row10 卒業予定年 -->
                                <div class="color-7 col-12 small mt-4">卒業予定年</div>
                                <div class="col-12 mt-4"><?php echo $graduate_year."年".$graduate_month."月"; ?></div>

                                <!-- row11 出身高校名 -->
                                <div class="color-7 col-12 small mt-4">出身高校名</div>
                                <div class="col-12 mt-4"><?php echo $high_school; ?></div>

                                <!-- row12 ゼミ・研究室 -->
                                <div class="color-7 col-12 small mt-4">ゼミ・研究室</div>
                                <div class="col-12 mt-4"><?php echo $seminar; ?></div>

                                <!-- row13 クラブ・サークル -->
                                <div class="color-7 col-12 small mt-4">クラブ・サークル</div>
                                <div class="col-12 mt-4"><?php echo $club; ?></div>

                                <!-- row14 戻るボタン-->
                                <div class="col-md-6 mt-3">
                                    <button class="btn btn-primary btn-block" type="button" onclick=" location.href='conf' ">戻る</button>
                                </div>

                                <!-- row15 登録ボタン-->
                                <div class="col-md-6 mt-3">
                                    <button class="btn btn-primary btn-block" type="submit" id="submit" onclick = " location.href='complete' ">登録</button>
                                </div>

                                <!-- 余白用のdivタグ -->
                                <div class="color-7 col-12 small mt-4"></div>
                                <div class="col-12 mt-4"></div>

                            </div>
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