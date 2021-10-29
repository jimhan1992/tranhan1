CREATE DATABASE `QLBH`;


CREATE TABLE Customer(
	cID int primary key auto_increment,
	Name VARCHAR(25),
	cAge tinyint
)

insert INTO Customer(cID,Name,cAge)
	VALUES (1,"Minh Quan",10),(2,"Ngoc Oanh",20),(3,"Hong ha",50);

	CREATE TABLE Orders(
		oID int PRIMARY KEY auto_increment,
		cID int,
		oDate Datetime,
		oTotalPrice int,
		CONSTRAINT FK_Orders_Customer FOREIGN KEY (cID)
		REFERENCES Customer(cID)
		);

	insert INTO Orders(cID,oDate)VALUES
		(1,"2006/03/21"),
		(2,"2006/03/23"),
		(1,"2006/03/26")

		CREATE TABLE Product(
			pID int PRIMARY key auto_increment,
			pName VARCHAR(25),
			pPrice int
			);

		insert INTO Product(pName,pPrice)VALUES('May Giat',3),
			('Tu Lanh',5),
			('Dieu Hoa',7),
			('Quat',1),
			('Bep Dien',2)

			CREATE TABLE OrderDetail(
				oID int,
				pID int,
				odQTY int,
				CONSTRAINT FK_OrderDetail_Orders FOREIGN KEY (oID)
				REFERENCES Orders(oID),
				CONSTRAINT FK_OrderDetail_Product FOREIGN KEY (pID)
				REFERENCES Product(pID)
				);

			INSERT INTO OrderDetail(oID,pID,odQTY)VALUES
			(1,1,3),
			(1,3,7),
			(1,4,2),
			(1,1,1),
			(1,1,8),
			(1,5,4),
			(1,3,3)




-- 2...Hiển thị các thông tin  gồm oID, oDate, oPrice của tất cả các hóa đơn trong bảng Order, danh sách phải sắp xếp theo thứ tự ngày tháng, hóa đơn mới hơn nằm trên như hình sau:	

select * from Orders order by oDate desc
-- 3...Hiển thị tên và giá của các sản phẩm có giá cao nhất như sau
select pName, max(pPrice) as pPrice from Product;
-- Hiển thị danh sách các khách hàng đã mua hàng, và danh sách sản phẩm được mua bởi các khách đó như sau:	
