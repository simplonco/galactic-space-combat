

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(30) NOT NULL,
  `position` int(3) NOT NULL,
  `visible` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) AUTO_INCREMENT=5;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` VALUES (1,'About Widget Corp',1,1),(2,'Products',2,1),(3,'Services',3,1);


