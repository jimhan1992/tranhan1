CREATE DATABASE QLTV

--TAO BANG STUDENT
CREATE TABLE Students (
	student_id INT PRIMARY KEY AUTO_INCREMENT,
	student_name VARCHAR (50) NOT NULL,
	student_birthday DATE NOT NULL,
	student_address VARCHAR(500),
	email VARCHAR(50) NOT NULL,
	phone VARCHAR(50),
	image VARCHAR(500));
-- tao ban ghi cho bang
INSERT INTO Students(student_name,student_birthday,student_address,email,phone,image)
VALUES
(1,"tran_han","1992/01/04","ND","tranhan1992@gmail.com","253644444",""),
(2,"le_quan","1999/03/04","HN","quan4399@gmail.com","0199253655",""),
(3,"giang_truong","1988/05/04","ND","giangthanhtruong1988@gmail.com","0944125365",""),
(4,"vu_duong","1998/03/23","ND","duong@gmail.com","0977460093","")


--TAO BANG BORROW_CARD
CREATE TABLE Borrow_card(
	card_id int PRIMARY KEY AUTO_INCREMENT,
	student_id int,
	borrow_date date,
	borrow_return date,
	foreign key(student_id) references Students(student_id));
-- tao ban ghi cho bang BORROW_CARD
INSERT INTO Borrow_card(student_id,borrow_date,borrow_return)
VALUES
(2,"2021/03/01","2021/03/10"),
(1,"2021/03/01","2021/03/10"),
(4,"2021/03/01","2021/03/10"),
(3,"2021/03/01","2021/03/10")

--TAO BANG CATEGORY
CREATE TABLE Category(
	category_id int primary key AUTO_INCREMENT,
	category_name varchar(30));
--
INSERT INTO Category(category_name)
VALUES
("thu_cung"),
("tieu_thuyet"),
("van_hoc"),
("toan_hoc-logic")

--TAO BANG BOOK
CREATE TABLE Books (
	book_id INT PRIMARY KEY AUTO_INCREMENT,
	book_name VARCHAR(20) NOT NULL,
	author VARCHAR(20)NOT NULL,
	NXB VARCHAR(20) NOT NULL,
	price INT NOT NULL,
	year_export DATE NOT NULL,
	category_id int not null,
	number_public int not null,
	foreign key(category_id) references Category(category_id));
--tao ban ghi cho bang Books
INSERT INTO Books (book_id,book_name,author,NXB,price,year_export,category_id,number_public)
VALUES
(1,"sach_nuoi_cho","quan4399","dat viet",20000,"1999/01/01",1,1),
(2,"tieu_ngao_giang_ho","tranhan1992","ong to truyen",2000000000,"1992/01/01",2,1000),
(3,"phu_thuy_may_tinh","giangthanhtruong1988","ong to truyen",2000,"1989/01/01",4,2),
(4,"de_men_phieu_luu_ky","vu_duong","ong to truyen",200000,"1998/01/01",3,3)

CREATE TABLE Books_borrow(
	book_id int not null,
	card_id int not null,
	foreign key(book_id) references Books(book_id),
	foreign key(card_id) references Borrow_card(card_id));
--tao ban ghi Books_borrow
INSERT INTO Books_borrow(book_id,card_id)
VALUES
(1,2),
(2,1),
(3,3),
(4,3)

