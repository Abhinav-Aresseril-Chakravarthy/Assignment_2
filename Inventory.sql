
CREATE TABLE IF NOT EXISTS `INVENTORY` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `item_name` varchar(50) NOT NULL, 
  `description` varchar(100) , 
  `value` varchar(25) NOT NULL, 
  `quantity` int(10) NOT NULL, 
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
