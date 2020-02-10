<?php
$mail = array(
        'field' => 'mail',
        'label' => 'メールアドレス',
        'rules' => 'required|valid_email|is_unique[user.mail]',
        'errors' => array(
        'required' => '{field} は必須です',
        'valid_email' => '{field} がメールアドレスとして正しくありません',
        'is_unique' => '{field} は既に存在しています'
    )
);

$password = array(
        'field' => 'password',
        'label' => 'パスワード',
        'rules' => array(
        'required',
        array(
            'isPassword',
      function ($password)
      {
        if($password === '')
        {
          return TRUE;
        }

        if(preg_match('/\A(?=.*?[a-z])(?=.*?\d)[!-~]{8,100}+\z/i', $password))
        {
          return TRUE;
        }
        return FALSE;
      }
    )
  ),
  'errors' => array(
    'required' => '{field} は必須です',
    'isPassword' => '{field} は8文字以上100文字以下の英数字記号で入力してください'
  )
);

$passconf = array(
    'field' => 'passconf',
    'label' => 'パスワード（再入力）',
    'rules' => 'matches[password]',
    'errors' => array(
    'matches' => '{field} が一致しません'
    )
);

$name = array(
    'field' => 'name',
    'label' => 'ユーザーネーム',
    'rules' => 'required|max_length[128]',
    'errors' => array(
    'required' => '{field} は必須です',
    'max_length' => '{field} は128文字以下で入力してください'
    )
);

//この名前で設定しておけばRegisterクラスのindexメソッドで勝手に呼び出されるようになります
$config['register/index'] = array($mail, $password, $passconf, $name);

// 新規登録時に用いるバリデーションルール
$config = array(
  'sign_up' => array(
          array(
                  'field' => 'last_kana_name',
                  'label' => 'セイ',
                  'rules' => 'regex_match[/^[ァ-ヶー]+$/u]'
          ),
          array(
                  'field' => 'first_kana_name',
                  'label' => 'メイ',
                  'rules' => 'regex_match[/^[ァ-ヶー]+$/u]'
          ),
          array(
                  'field' => 'gender',
                  'label' => '性別',
                  'rules' => 'callback__not_hyphen'
          ),
          array(
                  'field' => 'year',
                  'label' => '年',
                  'rules' => 'callback__not_hyphen'
          ),
          array(
                  'field' => 'month',
                  'label' => '月',
                  'rules' => 'callback__not_hyphen'
          ),
          array(
                  'field' => 'day',
                  'label' => '日',
                  'rules' => 'callback__not_hyphen'
          ),
          array(
                  'field' => 'tell',
                  'label' => '電話番号',
                  'rules' => 'numeric'
          ),
          array(
                  'field' => 'email',
                  'label' => 'メールアドレス',
                  'rules' => 'valid_email'
          ),
          array(
                  'field' => 'pass',
                  'label' => 'パスワード',
                  'rules' => 'alpha_numeric|callback__check_pass'
          ),
          array(
                  'field' => 'check_pass',
                  'label' => '確認用パスワード',
                  'rules' => 'alpha_numeric'
          ),
          array(
                  'field' => 'graduate_year',
                  'label' => '卒業年',
                  'rules' => 'callback__not_hyphen'
          ),
          array(
                  'field' => 'graduate_month',
                  'label' => '卒業月',
                  'rules' => 'callback__not_hyphen'
          ),
          array(
                  'field' => 'seminar',
                  'label' => 'ゼミ・研究室',
                  'rules' => 'max_length[30]'
          ),
          array(
                  'field' => 'club',
                  'label' => 'クラブ・サークル',
                  'rules' => 'max_length[30]'
    )
  )
);