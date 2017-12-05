CREATE TABLE IF NOT EXISTS `user` (
  `username` int(20) NOT NULL AUTO_INCREMENT,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `time` datetime NULL,
  PRIMARY KEY (`art_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
---等待完善---

CREATE TABLE IF NOT EXISTS `artical` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `content` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `time` datetime NULL,
  PRIMARY KEY (`art_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;