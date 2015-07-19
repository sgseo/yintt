<?php
return array(
	//'配置项'=>'配置值'
    'ADMIN_CACHE_TIME'     =>'3600',//后台数据缓存时间，以秒为单位
	'ADMIN_PAGE_SIZE'=>20,//后台列表默认显示条数
	'ADMIN_MAX_UPLOAD'=>2000000,//后台上传文件最大限制2M
	'ADMIN_UPLOAD_DIR'=>'UF/Uploads/',//后台上传目录
	'DB_BAKPATH'=>C("WEB_ROOT").'UF/data',//数据库保存地址
	'ZIP_PATH'=>'UF/zip',//数据库保存地址
	'ADMIN_ALLOW_EXTS'=>array('jpg', 'gif', 'png', 'jpeg'),//允许上传的附件类型
	//'HTML_CACHE_ON'=>false,
	//文章缩图图
	'ARTICLE_UPLOAD_H'=>'300',//文章缩图图高度
	'ARTICLE_UPLOAD_W'=>'300',//文章缩图图宽度
	//产品缩图图
	'PRODUCT_UPLOAD_H'=>'260',//产品缩图图高度
	'PRODUCT_UPLOAD_W'=>'260',//产品缩图图宽度

	//是否生成静态
    'IS_HTML'=>array(
			0=>'否',
			1=>'是',
		),
	//会员类型
    'MEMBER_TYPE'=>array(
			0=>'普通会员',
			1=>'管理员',
		),
	'TOKEN_ON'=>true,  // 是否开启令牌验证
	'TOKEN_NAME'=>'__hash__',    // 令牌验证的表单隐藏字段名称
	'TOKEN_TYPE'=>'md5',  //令牌哈希验证规则 默认为MD5
	'TOKEN_RESET'=>true,  //令牌验证出错后是否重置令牌 默认为true
	'AUDIT_STATE'=>array(
			'0'=>'待审核',
			'1'=>'审核通过',
			'2'=>'审核未通过'
		),
	'DAY_LIST'=>array(
			'7'=>'7天',
			'14'=>'14天',
			'30'=>'30天',
	),
	'MASS_RECEIVER_TYPE'=>array(
		"100"=>"网站所有用户",
		"101"=>"网站所有实名认证用户",
		"102"=>"网站所有Email认证用户",
	),
);
?>