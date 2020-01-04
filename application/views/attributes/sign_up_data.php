<?php
    $form_open_data = array(
        'class'         => 'mt-4 text-left',
        'name'          => 'date',
        'id'            => '',
        'target'        => '_blank'
    );

    $input_last_name_data = array(
        'class'         => 'form-control',
        'name'          => 'last_name',
        'placeholder'   => '山田',
        'required'      => ''
    );

    $input_first_name_data = array(
        'class'         => 'form-control',
        'name'          => 'first_name',
        'placeholder'   => '太郎',
        'required'      => ''
    );

    $input_last_kana_name_data = array(
        'class'         => 'form-control',
        'name'          => 'last_kana_name',
        'placeholder'   => 'ヤマダ',
        'required'      => ''
    );

    $input_first_kana_name_data = array(
        'class'         => 'form-control',
        'name'          => 'first_kana_name',
        'placeholder'   => 'タロウ',
        'required'      => ''
    );

    $select_gender_data = array(
        'initial'        => '----',
        'male'           => '男',
        'female'         => '女',
        'other'          => 'その他',
    );

    // 現在の年度を取得
    $current_year = date('Y');

    // 配列初期化
    $select_year_data  = array( 'initial' => '----' );
    $select_month_data = array( 'initial' => '----' );
    $select_day_data   = array( 'initial' => '----' );

    // 生まれ年のデータ
    $current_year -= 10;
    for ( $count100 = 0; $count100 < 100 ; $count100++ ) {
        $select_year_data[$current_year] = (string) $current_year;
        $current_year--;
    }

    // 生まれ月のデータ
    for ( $count_month = 1; $count_month <= 12 ; $count_month++ ) {
        $select_month_data[$count_month] = (string) $count_month;
    }

    // 生まれ日のデータ
    for ( $count_day = 1; $count_day <= 31 ; $count_day++ ) {
        $select_day_data[$count_day] = (string) $count_day;
    }

    $input_email_data = array(
        'class'         => 'form-control',
        'name'          => 'email',
        'placeholder'   => 'メールアドレス',
        'required'      => ''
    );

    $form_pass_data = array(
        'class'         => 'form-control',
        'name'          => 'pass',
        'placeholder'   => 'パスワード',
        'required'      => ''
    );

    $form_check_pass_data = array(
        'class'         => 'form-control',
        'name'          => 'check_pass',
        'placeholder'   => '確認のため、もう一度パスワードを入力してください',
        'required'      => ''
    );

    $form_checkbox_data = array(
        'name'          => 'checkbox',
        'class'         => 'form-check-input',
        'value'         => 'TRUE'
    );

    $form_button_data = array(
        'class'         => 'btn btn-primary btn-block',
        'type'          => 'submit',
        'content'       => 'アカウントを作成する'
    );
?>