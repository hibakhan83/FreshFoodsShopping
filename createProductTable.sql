use `User_Info`;
CREATE TABLE products (
	product_id int(11) NOT NULL AUTO_INCREMENT,
	product_code varchar(100) NOT NULL,
    	product_name varchar(200) NOT NULL,
    	product_description mediumtext NOT NULL,
    	product_price float(10,2) NOT NULL,
    	PRIMARY KEY(product_id),
	UNIQUE KEY product_code(product_code)
);
