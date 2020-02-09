<?php

    if ( empty( $last_name       ) ) { $last_name = NULL; }
    if ( empty( $first_name      ) ) { $first_name = NULL; }
    if ( empty( $last_kana_name  ) ) { $last_kana_name = NULL; }
    if ( empty( $first_kana_name ) ) { $first_kana_name = NULL; }
    if ( empty( $gender          ) ) { $gender = NULL; }
    if ( empty( $year            ) ) { $year = NULL; }
    if ( empty( $month           ) ) { $month = NULL; }
    if ( empty( $day             ) ) { $day = NULL; }
    if ( empty( $tell            ) ) { $tell = NULL; }
    if ( empty( $email           ) ) { $email = NULL; }
    if ( empty( $university      ) ) { $university = NULL; }
    if ( empty( $faculty         ) ) { $faculty = NULL; }
    if ( empty( $department      ) ) { $department = NULL; }
    if ( empty( $high_school     ) ) { $high_school = NULL; }
    if ( empty( $seminar         ) ) { $seminar = NULL; }
    if ( empty( $club            ) ) { $club = NULL; }

    // var_dump($post_data);

    $form_open_data = array(
        'class'         => 'mt-4 text-left',
        'name'          => 'date',
        'id'            => 'form'
    );

    $input_last_name_data = array(
        'class'         => 'form-control',
        'name'          => 'last_name',
        'placeholder'   => '山田',
        'value'         =>  $last_name,
        'required'      => ''
    );

    $input_first_name_data = array(
        'class'         => 'form-control',
        'name'          => 'first_name',
        'placeholder'   => '太郎',
        'value'         => $first_name,
        'required'      => ''
    );

    $input_last_kana_name_data = array(
        'class'         => 'form-control',
        'name'          => 'last_kana_name',
        'value'         => $last_kana_name,
        'placeholder'   => 'ヤマダ',
        'required'      => ''
    );

    $input_first_kana_name_data = array(
        'class'         => 'form-control',
        'name'          => 'first_kana_name',
        'value'         => $first_kana_name,
        'placeholder'   => 'タロウ',
        'required'      => ''
    );

    $select_gender_data = array(
        'initial'        => '----',
        '男'           => '男',
        '女'         => '女',
        'その他'          => '選択しない',
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

    $input_tell_data = array(
        'class'         => 'form-control',
        'name'          => 'tell',
        'placeholder'   => '0901234XXXX',
        'value'         => $tell,
        'required'      => ''
    );

    $input_email_data = array(
        'class'         => 'form-control',
        'name'          => 'email',
        'placeholder'   => 'メールアドレス',
        'value'         => $email,
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

    $input_university_data = array(
        'class'         => 'form-control',
        'name'          => 'university',
        'placeholder'   => '愛媛大学',
        'value'         => $university,
        'required'      => ''
    );

    $input_faculty_data = array(
        'class'         => 'form-control',
        'name'          => 'faculty',
        'placeholder'   => '工学部',
        'value'         => $faculty,
        'required'      => ''
    );

    $input_department_data = array(
        'class'         => 'form-control',
        'name'          => 'department',
        'placeholder'   => '情報工学科',
        'value'         => $department,
        'required'      => ''
    );

    // 現在の年度を取得
    $current_year = date('Y');
    // 配列初期化
    $select_graduate_year_data  = array( 'initial' => '----' );
    $select_graduate_month_data = array( 'initial' => '----' );

    // 卒業予定年のデータ
    $current_year -= 5;
    for ( $count10 = 0; $count10 < 10 ; $count10++ ) {
        $select_graduate_year_data[$current_year] = (string) $current_year;
        $current_year++;
    }

    // 卒業予定月のデータ
    for ( $count_graduate_month = 1; $count_graduate_month <= 12 ; $count_graduate_month++ ) {
        $select_graduate_month_data[$count_graduate_month] = (string) $count_graduate_month;
    }

    $input_high_school_data = array(
        'class'         => 'form-control',
        'name'          => 'high_school',
        'value'         => $high_school,
        'placeholder'   => '東高等学校',
        'required'      => ''
    );

    $input_seminar_data = array(
        'class'         => 'form-control',
        'name'          => 'seminar',
        'value'         => $seminar,
        'placeholder'   => 'ゼミ・研究室'
    );

    $input_club_data = array(
        'class'         => 'form-control',
        'name'          => 'club',
        'value'         => $club,
        'placeholder'   => 'クラブ・サークル'
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