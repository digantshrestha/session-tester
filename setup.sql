create table loginsystem(
    id serial primary key,
    username varchar(20) not null,
    password text not null
);