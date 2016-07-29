SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

CREATE TABLE IF NOT EXISTS `address` (
  `address_id` int(11) NOT NULL AUTO_INCREMENT,
  `address_type_id` int(11) NOT NULL,
  `time_created` int(11) NOT NULL,
  `time_updated` int(11) NOT NULL,
  `street_address_1` varchar(255) NOT NULL,
  `street_address_2` varchar(255) NOT NULL,
  `city_name` varchar(255) NOT NULL,
  `subdivision_name` varchar(255) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  PRIMARY KEY (`address_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

INSERT INTO `address` (`address_id`, `address_type_id`, `time_created`, `time_updated`, `street_address_1`, `street_address_2`, `city_name`, `subdivision_name`, `postal_code`, `country_name`) VALUES
(1, 1, 762483360, 0, '300 Oracle Parkway', '', 'Redwood City', 'California', '94065', 'United States');

CREATE TABLE IF NOT EXISTS `location` (
  `location_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(255) NOT NULL,
  `city_latitude` double NOT NULL,
  `city_longitude` double NOT NULL,
  `subdivision_name` varchar(255) NOT NULL,
  `postal_code` varchar(20) NOT NULL,
  PRIMARY KEY (`location_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

INSERT INTO `location` (`location_id`, `city_name`, `city_latitude`, `city_longitude`, `subdivision_name`, `postal_code`) VALUES
(1, 'Townsville', 38.7153408676386, -75.0866805016994, 'State', '12345'),
(2, 'Villageland', 33.1156463623047, -117.120277404785, 'Region', '67890'),
(3, 'Hamlet', 43.6666296, -92.9746367, 'Territory', '34567'),
(4, 'Redwood City', 37.5311965942383, -122.2646484375, 'California', '94065');