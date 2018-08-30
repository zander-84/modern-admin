DROP TABLE IF EXISTS `demo`;
CREATE TABLE `demo` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT 'text',
  `img` varchar(255) DEFAULT NULL COMMENT 'image',
  `email` varchar(255) DEFAULT NULL COMMENT 'Icon',
  `phone` varchar(255) DEFAULT NULL COMMENT 'Prepend',
  `password` varchar(255) DEFAULT NULL  COMMENT  'password',
  `info` varchar(255) DEFAULT NULL  COMMENT  'textarea',
  `sex`  varchar(255)  DEFAULT NULL COMMENT 'dropdownlist',
  `is_high`  varchar(255)  DEFAULT NULL COMMENT 'RadioList',
  `is_married` varchar(255) DEFAULT NULL COMMENT 'checkbox',
  `is_single` varchar(255) DEFAULT NULL COMMENT 'Switch',
  `hobby` varchar(255) DEFAULT NULL COMMENT 'DropMultiDownList',
  `foods` varchar(255) DEFAULT NULL COMMENT 'tags',
  `waking_time` varchar(255) DEFAULT NULL COMMENT 'start_time',
  `rest_time` varchar(255) DEFAULT NULL COMMENT 'end_time',
  `today` varchar(255) DEFAULT NULL COMMENT 'time',
  `insert_date` datetime DEFAULT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;