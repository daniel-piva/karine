CREATE TABLE IF NOT EXISTS `user` (
  `id` int(55) NOT NULL AUTO_INCREMENT,
  `user` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `age` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;
