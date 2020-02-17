# mixross データベース定義書

## 作るときのコマンド　メモ
```
create table users (
 id 		    int(11) primary key auto_increment,
 last_name      varchar(50) NOT NULL,
 last_kana_name varchar(50) NOT NULL,
 first_name     varchar(50) NOT NULL,
 first_kana_name varchar(50) NOT NULL,
 gender         varchar(10) NOT NULL,
 birthday		date NOT NULL,
 email			varchar(256) NOT NULL,
 password 		varchar(256) NOT NULL,
 university     varchar(50) NOT NULL,
 faculty        varchar(50) NOT NULL,
 department     varchar(50) NOT NULL,
 graduate_date  date NOT NULL,
 high_school    varchar(50) NOT NULL,
 seminar        varchar(50),
 club           varchar(50),
 created_at     timestamp default CURRENT_TIMESTAMP NOT NULL,
 is_running     boolean NOT NULL default 1
);

```

expires越してないか&&token合っているかどうか確認する
```
create table pre_users (
 id 		    int(11) primary key auto_increment,
 last_name      varchar(50) NOT NULL,
 last_kana_name varchar(50) NOT NULL,
 first_name     varchar(50) NOT NULL,
 first_kana_name varchar(50) NOT NULL,
 gender         varchar(10) NOT NULL,
 birthday		date NOT NULL,
 tell           varchar(50) NOT NULL,
 email			varchar(256) NOT NULL,
 password 		varchar(256) NOT NULL,
 university     varchar(50) NOT NULL,
 faculty        varchar(50) NOT NULL,
 department     varchar(50) NOT NULL,
 graduate_date  date NOT NULL,
 high_school    varchar(50) NOT NULL,
 seminar        varchar(50),
 club           varchar(50),
 url_token      varchar(128) NOT NULL,
 created_at     timestamp default CURRENT_TIMESTAMP NOT NULL
);
```



