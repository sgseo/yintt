<?php

/*
		SoftName : JingPai2010 Version 2012
		Author   : lzhhand
		Copyright: Powered by www.jingpai2010.com
*/

DB_D("DROP TABLE IF EXISTS `pre_common_template_permission`;");
DB_C("CREATE TABLE `pre_common_template_permission` (
  `targettplname` varchar(100) NOT NULL DEFAULT '',
  `uid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `allowmanage` tinyint(1) NOT NULL DEFAULT '0',
  `allowrecommend` tinyint(1) NOT NULL DEFAULT '0',
  `needverify` tinyint(1) NOT NULL DEFAULT '0',
  `inheritedtplname` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`targettplname`,`uid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");

?>