-- duaw ra don hang co tong tien lon nhat

SELECT orders.orderNumber as 'Ma don hang',
SUM(orderdetails.quantityOrdered * orderdetails.priceEach) as 'Tong_tien'
FROM orders
JOIN orderdetails 
ON orders.orderNumber = orderdetails.orderNumber
GROUP BY orders.orderNumber
ORDER BY tong_tien DESC
LIMIT 1
WHERE orderDate > '2003-01-01' AND orderDate < '2003-01-30'