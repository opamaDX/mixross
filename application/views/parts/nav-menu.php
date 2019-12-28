<div class="znav-white znav-container sticky-top navbar-elixir" id="znav-container">
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand overflow-hidden pr-3" href="<?php echo base_url();?>">
                <div>みくろす</div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger hamburger--emphatic">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav fs-0 fw-700">
                    <li><?php echo anchor('main_ctrl/load_page_cando', 'みくろすでできること'); ?></li>
                    <li><?php echo anchor('main_ctrl/load_page_what_is', 'みくろすとは'); ?></li>
                    <li><?php echo anchor('main_ctrl/load_page_event', 'イベント'); ?></li>
                    <li><?php echo anchor('main_ctrl/load_page_question', 'よくある質問'); ?></li>
                    <li><a href="mailto:info@example.com?subject=&body=">お問い合わせ</a></li>
                </ul>
                <ul class="navbar-nav ml-lg-auto">
                    <li>
                        <a class="btn btn-outline-primary btn-capsule btn-sm border-2x fw-700" href="<?php echo base_url(); ?>main_ctrl/load_page_sign_in"
                            target="_blank">ログイン</a>
                    </li>
                    <li>
                        <a class="btn btn-outline-primary btn-capsule btn-sm border-2x fw-700" href="<?php echo base_url(); ?>main_ctrl/load_page_sign_up"
                            target="_blank">新規登録</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>