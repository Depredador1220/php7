create database samples;
use samples;
create table person (
first_name varchar(50),
last_name varchar(50),
date_of_birth int
);

insert into person (first_name, last_name, date_of_birth)
values ('John', 'Lenon', -922406400);
insert into person (first_name, last_name, date_of_birth)
values ('Paul', 'McCartney', -869097600);
insert into person (first_name, last_name, date_of_birth)
values ('Ringo', 'Star', -930528000);
insert into person (first_name, last_name, date_of_birth)
values ('George', 'Harrison', -847324800);
