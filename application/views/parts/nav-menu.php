<div class="znav-white znav-container sticky-top navbar-elixir" id="znav-container">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand overflow-hidden pr-3" href="<?php echo base_url();?>">
                <div>みくろす</div>
            </a>

            <!-- ハンバーガーメニュー Start -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger hamburger--emphatic">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </button>
            <!-- ハンバーガーメニュー End -->

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav fs-0 fw-700">
                    <li><?php echo anchor('main_ctrl/load_page_cando', 'みくろすでできること'); ?></li>
                    <li><?php echo anchor('main_ctrl/load_page_what_is', 'みくろすとは'); ?></li>
                    <li><?php echo anchor('main_ctrl/load_page_event', 'イベント'); ?></li>
                    <li><?php echo anchor('main_ctrl/load_page_question', 'よくある質問'); ?></li>
                    <li><a href="mailto:info@example.com?subject=&body=">お問い合わせ</a></li>
                </ul>
                <ul class="navbar-nav ml-lg-auto">
                    <?php if(empty($_SESSION['user_id'])): ?>
                        <li><?php echo anchor('main_ctrl/load_page_sign_in','ログイン',$anchor_sign_in_data); ?></li>
                        <li><?php echo anchor('sign_up_ctrl','新規登録',$anchor_sign_up_data); ?></li>
                    <?php elseif(isset($_SESSION['user_id'])): ?>
                        <li><?php echo anchor('sign_in_ctrl/logout', 'ログアウト', $anchor_logout_data); ?></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </div>
</div>
