SET sql_mode = '';

drop table if exists book;

create table book (
    book_id integer not null primary key auto_increment,
    book_title varchar(100) not null,
    book_author varchar(20) not null,
    book_category varchar(20) not null,
    book_editor varchar(20) not null,
    book_description varchar(2000) not null,
    book_illustration_id integer not null,
    book_date datetime NOT NULL

  --  constraint fk_book_illustration foreign key(book_illustration_id) references book_illustrations(ID)

) engine=innodb character set utf8 collate utf8_unicode_ci;


drop table if exists t_need_help;

create table t_need_help (
    nhelp_id integer not null primary key auto_increment,
    nhelp_firstName varchar(25) not null,
    nhelp_name varchar(25) not null,
    nhelp_country varchar(50) not null,
    nhelp_city varchar(50) not null,
    nhelp_adress varchar(50) not null,
    nhelp_tutorName varchar(30) not null,
    nhelp_tutorPhone varchar(20) not null,
    nhelp_message varchar(2000) not null

) engine=innodb character set utf8 collate utf8_unicode_ci;
