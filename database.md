# mixross データベース定義書

## users テーブル（userの情報を格納）

|項番|カラム論理名|カラム物理名|型|桁|Not null|初期値|主キー|インデックス|コメント|
|---|---|---|---|---|---|---|---|---|---|
|1|連番|id|int|5|〇|自動連番|〇|-|auto primary key|-|-|
|2|姓|last_name|varchar|50|〇|-|-|-|山田|
|3|セイ|last_kana_name|varchar|50|〇|-|-|-|ヤマダ|
|4|名|first_name|varchar|50|〇|-|-|-|太郎|
|5|メイ|first_kana_name|varchar|50|〇|-|-|-|タロウ|
|6|性別|gender|varchar|10|〇|-|-|-|男・女・その他|
|7|生年月日|birthday|date|-|〇|-|-|-|-|
|8|メールアドレス|email|varchar|256|〇|-|-|-|unique制約設ける|
|9|パスワード|password|varchar|256|〇|-|-|-|ハッシュ化されたパスワード|
|10|登録日|created_at|datetime|-|〇|-|-|-|-|
|11|論理削除フラグ|is_running|boolean|-|-|-|-|初期値はTRUE,稼働中はTRUE,休止中はFALSEで管理|

## future_mail テーブル（未来へ送信するメールの情報を格納）

|項番|カラム論理名|カラム物理名|型|桁|Not null|初期値|主キー|インデックス|コメント|
|---|---|---|---|---|---|---|---|---|---|
|1|連番|id|int|5|〇|自動連番|〇|-|auto primary key|
|2|ユーザID|user_id|int|5|〇|-|-|-|foreign keyとして格納|
|3|送信先の相手の名前|to_name|varchar|256|-|-|-|-|-|
|4|送信日|send_date|date|10|〇|-|-|-|-|
|5|送信先のメールアドレス|to_address|varchar|256|〇|-|-|-||
|6|本文|message|text|65535|-|-|-|-|-|
|7|添付ファイルの名前|file_name|varchar|256|-|-|-|-|-|
|8|登録日|created_at|datetime|-|〇|-|-|-|-|
|9|論理削除フラグ|delete_flag|boolean|-|-|-|-|初期値はFALSE,削除されたらTRUEに切り替える|

## 作るときのコマンド　メモ
```
create table users (
 id 		    int(5) primary key auto_increment,
 last_name      varchar(50) NOT NULL,
 last_kana_name varchar(50) NOT NULL,
 first_name     varchar(50) NOT NULL,
 frst_kana_name varchar(50) NOT NULL,
 gender         varchar(10) NOT NULL,
 birthday		date NOT NULL,
 email			varchar(256) NOT NULL,
 password 		varchar(256) NOT NULL,
 created_at     datetime NOT NULL,
 is_running     boolean NOT NULL default 1
);
```



