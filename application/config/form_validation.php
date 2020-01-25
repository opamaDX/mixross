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