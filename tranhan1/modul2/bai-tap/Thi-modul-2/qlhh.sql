create database qlhh
create table products(
    id int primary key auto_incriment,
    nameProduct varchar (255),
    typeProduct varchar (255),
    priceProduct int,
    quantityProduct int,
    description varchar (255),
    dateCreate date
)