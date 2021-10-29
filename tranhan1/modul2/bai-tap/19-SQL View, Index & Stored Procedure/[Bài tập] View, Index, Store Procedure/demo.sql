-- Bước 1: Tạo cơ sở dữ liệu demo

CREATE DATABASE 19_demo;



-- Bước 2: Tạo bảng Products với các trường dữ liệu sau:
-- Id
-- productCode
-- productName
-- productPrice
-- productAmount
-- productDescription
-- productStatus

CREATE TABLE Products(
	id int PRIMARY KEY AUTO_INCREMENT,
	productCode VARCHAR(255),
	productName VARCHAR(255),
   productPrice INT,--gia san pham
  productAmount INT, --so san pham
  productDescription VARCHAR(500), --mo ta san pham
  productStatus VARCHAR(255) --trang thai
);


-- Chèn một số dữ liệu mẫu cho bảng Products

INSERT INTO Products (productCode,productName,productPrice,productAmount,productDescription,productStatus)
VALUES 
('M01','Nokia1280','1000','500','ko bit mo ta gi','Y'),
('M02','Nokia110i','5000','500','ko bit mo ta gi','Y'),
('M03','Iphone6','20000','500','ko bit mo ta gi','Y'),
('M04','Iphone7','25000','500','ko bit mo ta gi','Y'),
('M05','Iphone8','30000','500','ko bit mo ta gi','Y'),
('M06','Iphone10','32000','500','ko bit mo ta gi','Y'),
('M07','SamSungGalaxyNote1','10000','500','ko bit mo ta gi','Y'),
('M08','SamSungGalaxyNote2','15000','500','ko bit mo ta gi','Y'),
('M09','SamSungGalaxyNote3','20000','500','ko bit mo ta gi','Y')



-- Bước 3:

-- Tạo Unique Index trên bảng Products (sử dụng cột productCode để tạo chỉ mục)
CREATE UNIQUE INDEX index_Product ON Products(productCode);



-- Tạo Composite Index trên bảng Products (sử dụng 2 cột productName và productPrice)
CREATE INDEX index_Name_Price ON Products(productName,productPrice);


-- Sử dụng câu lệnh EXPLAIN để biết được câu lệnh SQL của bạn thực thi như nào
EXPLAIN SELECT * FROM Products;


-- So sánh câu truy vấn trước và sau khi tạo index







CREATE PROCEDURE editIdProduct(IN pid int) BEGIN UPDATE Products SET id = pid; END;;

