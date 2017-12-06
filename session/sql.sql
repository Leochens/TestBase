CREATE TABLE IF NOT EXISTS `user` (

  `user_id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `password` varchar(64) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `time` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
---等待完善---

--日记
CREATE TABLE IF NOT EXISTS `article` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `user`  varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `title` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `time` datetime NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`art_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--书签管理
CREATE TABLE IF NOT EXISTS `bookmark` (
  `mark_id` int(11) NOT NULL AUTO_INCREMENT,
  `info` varchar(50) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `user` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'unknown',
  `__spare1` int(10)  NOT NULL DEFAULT 0,
  `__spare3` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `time` datetime NULL  DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`mark_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


INSERT INTO `user` (`username`, `password`, `email`, `time`) VALUES 
('zhl',
 'e10adc3949ba59abbe56e057f20f883e',
  '1183422598@qq.com',
   CURRENT_TIMESTAMP);
