<?php

/*
		SoftName : JingPai2010 Version 2012
		Author   : lzhhand
		Copyright: Powered by www.jingpai2010.com
*/

DB_D("DROP TABLE IF EXISTS `pre_forum_thread`;");
DB_C("CREATE TABLE `pre_forum_thread` (
  `tid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `fid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `posttableid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `sortid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `readperm` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `price` smallint(6) NOT NULL DEFAULT '0',
  `author` char(15) NOT NULL DEFAULT '',
  `authorid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `subject` char(80) NOT NULL DEFAULT '',
  `dateline` int(10) unsigned NOT NULL DEFAULT '0',
  `lastpost` int(10) unsigned NOT NULL DEFAULT '0',
  `lastposter` char(15) NOT NULL DEFAULT '',
  `views` int(10) unsigned NOT NULL DEFAULT '0',
  `replies` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `displayorder` tinyint(1) NOT NULL DEFAULT '0',
  `highlight` tinyint(1) NOT NULL DEFAULT '0',
  `digest` tinyint(1) NOT NULL DEFAULT '0',
  `rate` tinyint(1) NOT NULL DEFAULT '0',
  `special` tinyint(1) NOT NULL DEFAULT '0',
  `attachment` tinyint(1) NOT NULL DEFAULT '0',
  `moderated` tinyint(1) NOT NULL DEFAULT '0',
  `closed` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `stickreply` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `recommends` smallint(6) NOT NULL DEFAULT '0',
  `recommend_add` smallint(6) NOT NULL DEFAULT '0',
  `recommend_sub` smallint(6) NOT NULL DEFAULT '0',
  `heats` int(10) unsigned NOT NULL DEFAULT '0',
  `status` smallint(6) unsigned NOT NULL DEFAULT '0',
  `isgroup` tinyint(1) NOT NULL DEFAULT '0',
  `favtimes` mediumint(8) NOT NULL DEFAULT '0',
  `sharetimes` mediumint(8) NOT NULL DEFAULT '0',
  `stamp` tinyint(3) NOT NULL DEFAULT '-1',
  `icon` tinyint(3) NOT NULL DEFAULT '-1',
  `pushedaid` mediumint(8) NOT NULL DEFAULT '0',
  `cover` smallint(6) NOT NULL DEFAULT '0',
  `replycredit` smallint(6) NOT NULL DEFAULT '0',
  `relatebytag` char(255) NOT NULL DEFAULT '0',
  `maxposition` int(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`),
  KEY `digest` (`digest`),
  KEY `sortid` (`sortid`),
  KEY `displayorder` (`fid`,`displayorder`,`lastpost`),
  KEY `typeid` (`fid`,`typeid`,`displayorder`,`lastpost`),
  KEY `recommends` (`recommends`),
  KEY `heats` (`heats`),
  KEY `authorid` (`authorid`),
  KEY `isgroup` (`isgroup`,`lastpost`),
  KEY `special` (`special`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8");
DB_I("replace  into `pre_forum_thread` values('1','37','0','0','0','0','0','九洲贷发言人','11','教你玩转信用卡','1349171908','1349171908','九洲贷发言人','82','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','20','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('2','37','0','0','0','0','0','九洲贷发言人','11','玩转信用卡有绝招','1349172078','1349172078','九洲贷发言人','126','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('3','38','0','0','0','0','0','九洲贷发言人','11','民间借贷利息的约定不能随心所欲约定得过高,否则不受法....','1349311686','1349311686','九洲贷发言人','84','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('4','42','0','0','0','0','0','admin','1','如何识别投融资骗子公司','1349753578','1349753578','admin','97','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','20','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('5','38','0','0','0','0','0','admin','1','欧债任然是焦点，非美承担重压','1349754106','1349754106','admin','88','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('6','36','0','0','0','0','0','admin','1','贷款全款还是持币观望 手握30万如何买房','1349754511','1349754511','admin','107','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','1357680672	9,12,25','0');");
DB_I("replace  into `pre_forum_thread` values('7','38','0','0','0','0','0','admin','1','资金面吃紧 北京个人贷款利率普遍上浮10%以上','1349754869','1349754869','admin','86','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('8','43','0','0','0','0','0','admin','1','房价高，贷款买房怎么样？','1349755030','1349755030','admin','125','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('9','46','0','0','0','0','0','admin','1','贷款后容易“闯入”的五大还款误区','1349755283','1349755283','admin','127','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','1357678946	6,12,25','0');");
DB_I("replace  into `pre_forum_thread` values('10','42','0','0','0','0','0','admin','1','贷款真的不需要担保吗','1349755358','1349755358','admin','120','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('11','38','0','0','0','0','0','admin','1','银行个人贷款利率上浮 国有银行上浮10%至15%','1349755498','1349755498','admin','87','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('12','46','0','0','0','0','0','admin','1','拒绝做房奴聪明还贷款 理财专家三招教你巧还贷','1349755778','1349755778','admin','124','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','1357632811	6,9,25','0');");
DB_I("replace  into `pre_forum_thread` values('13','39','0','0','0','0','0','admin','1','贷款买房置业理财有窍 公积金贷款是首选','1349756005','1349756005','admin','87','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('14','43','0','0','0','0','0','admin','1','个人创业贷款的好方法','1349760582','1349760582','admin','121','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('15','47','0','0','0','0','0','admin','1','风险大引监管部门警惕 信用卡市场六大乱象','1349760798','1349760798','admin','121','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('16','45','0','0','0','0','0','admin','1','超级网银呼之欲出 第三方支付未被排除在外','1349760856','1349760856','admin','124','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('17','44','0','0','0','0','0','admin','1','建议尽快出台《放贷人条例》提高民间借贷利率上限','1349760994','1349760994','admin','122','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('18','38','0','0','0','0','0','admin','1','民间借贷规范化、阳光化','1349761254','1349761254','admin','84','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('19','38','0','0','0','0','0','472986645','17','金融混业监管亟待跟进','1349761292','1349761292','472986645','89','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','20','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('20','38','0','0','0','0','0','admin','1','电子平台给力民间借贷','1349761398','1349761398','admin','136','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('21','47','0','0','0','0','0','472986645','17','多银行推无抵押担保贷款','1349761470','1349761470','472986645','124','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('22','48','0','0','0','0','0','admin','1','资金“旱情”略有缓解 银行经营性贷款利率下调','1349761530','1349761530','admin','134','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('23','47','0','0','0','0','0','472986645','17','信用卡代还款需谨慎','1349761602','1349761602','472986645','130','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('24','47','0','0','0','0','0','472986645','17','你的信用卡被“截留”了吗','1349761824','1349761824','472986645','117','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('25','47','0','0','0','0','0','admin','1','民间借贷的优势','1349761952','1349761952','admin','144','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','1357694916	6,9,12,30,33,37','0');");
DB_I("replace  into `pre_forum_thread` values('26','43','0','0','0','0','0','472986645','17','什么是提前还贷 提前还贷申请怎么写？','1349762143','1349762143','472986645','162','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('27','36','0','0','0','0','0','admin','1','民间借贷相比银行贷款有哪些优势？','1349762212','1349762212','admin','108','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('28','46','0','0','0','0','0','472986645','17','中小企业五招敲开银行贷款大门','1349762257','1349762257','472986645','161','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('29','2','0','0','0','0','0','admin','1','国外小额贷款发展的成功经验','1349762361','1349762361','admin','104','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('30','45','0','0','0','0','0','admin','1','多方发力切实支持民间投资发展','1349762605','1349762605','admin','138','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','1357646191	25','0');");
DB_I("replace  into `pre_forum_thread` values('31','48','0','0','0','0','0','admin','1','民间贷款','1349762857','1349762857','admin','167','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('32','2','0','0','0','0','0','admin','1','面临金九银十考验 银行收紧房贷将进入持久战','1349763026','1349763026','admin','104','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('33','44','0','0','0','0','0','admin','1','民间借贷的经济理性与法治理性','1349763423','1349763423','admin','177','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','1357648781	25,37,37','0');");
DB_I("replace  into `pre_forum_thread` values('34','39','0','0','0','0','0','admin','1','放开“民间信贷”之问题','1349763522','1349763522','admin','106','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('35','50','0','0','0','0','0','admin','1','民间借贷的下一站','1349763609','1349763609','admin','135','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('36','51','0','0','0','0','0','admin','1','怎么投标赚钱多','1349763996','1349763996','admin','132','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('38','36','0','0','0','0','0','admin','1','狂飙的借贷利率 最高年息14.4%','1349764520','1349764520','admin','161','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('39','42','0','0','0','0','0','admin','1','20亿张银行卡换芯 成本或达千亿','1349764576','1349764576','admin','178','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('40','45','0','0','0','0','0','admin','1','银行业集体上调网银转账费 网站未公示惹争议','1349764631','1349764631','admin','181','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','1357653095	43','0');");
DB_I("replace  into `pre_forum_thread` values('41','39','0','0','0','0','0','admin','1','房贷调查：政策没有变化 银行执行略现松动迹象','1349764719','1349764719','admin','157','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','1356995084	','0');");
DB_I("replace  into `pre_forum_thread` values('42','50','0','0','0','0','0','admin','1','银行收费清查 公众呼吁尽快公布结果','1349768814','1349768814','admin','172','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('43','51','0','0','0','0','0','admin','1','超级网银手续繁琐首日遇冷','1349769018','1349769018','admin','181','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','1357653525	40','0');");
DB_I("replace  into `pre_forum_thread` values('45','47','0','0','0','0','0','九洲贷发言人','11','要申请信用卡请到以下网站','1349872775','1349872775','九洲贷发言人','188','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");
DB_I("replace  into `pre_forum_thread` values('46','2','0','0','0','0','0','九洲贷发言人','11','九洲贷各种标的定义','1349960674','1350608568','betty','114','1','-1','0','0','0','0','0','1','0','0','0','0','0','1','32','0','0','0','-1','-1','0','0','0','0','2');");
DB_I("replace  into `pre_forum_thread` values('47','2','0','0','0','0','0','admin','1','网站会不会被黑掉？','1349960943','1349960943','admin','150','0','0','0','0','0','0','0','0','0','0','0','0','0','0','32','0','0','0','-1','-1','0','0','0','0','0');");

?>