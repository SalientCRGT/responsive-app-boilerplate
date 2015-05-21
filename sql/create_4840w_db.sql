# Run as root for mysql

create database 4840w;

create user 4840w identified by '4840w';

grant all on 4840w.* to '4840w'@'%';

