# Product-Discount
Here is a Query of product_table
CREATE TABLE `product_data` (
 `ID` int(11) NOT NULL AUTO_INCREMENT,
 `p_name` varchar(56) NOT NULL,
 `p_price` int(11) NOT NULL,
 `p_desc` text NOT NULL,
 `qty` int(11) NOT NULL,
 `discount` int(11) NOT NULL,
 `total` int(11) NOT NULL,
 PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1
