drop table if exists book;

create table book (
    book_id integer not null primary key auto_increment,
    book_title varchar(100) not null,
    book_author varchar(20) not null,
    book_category varchar(20) not null,
    book_editor varchar(20) not null,
    -- book_img blob (500) not null,
    book_description varchar(2000) not null

) engine=innodb character set utf8 collate utf8_unicode_ci;
