﻿<?php
/**
 * config.php 系统配置：数据库连接、显示信息等
 * ----------------------------------------------------------------
 * OldCMS,site:http://www.oldcms.com
 */

/* 数据库连接 */
$config['dbHost']		='localhost';			//数据库地址
$config['dbUser']		='root';					//用户
$config['dbPwd']		='hengshi';	//密码
$config['database']		='xss';					//数据库名
$config['charset']		='utf8';				//数据库字符集
$config['tbPrefix']		='oc_';					//表名前缀
$config['dbType']		='mysql';				//数据库类型(目前只支持mysql)

/* 注册配置 */
$config['register']		='invite';				//normal,正常;invite,只允许邀请注册;close,关闭注册功能 注：当邀请开启时,未生成邀请码,邀请将不生效
$config['mailauth']		=false;					//注册时是否邮箱验证

/* url配置 */
$config['urlroot']		='http://121.42.41.165:88/XSS';		//网站 URL 路径
$config['urlrewrite']	=true;					//URL Rewrite

/* 存储配置 */
$config['filepath']		=ROOT_PATH.'/upload';			//文件存储目录,结尾无'/'
$config['fileprefix']	=$config['urlroot'].'/upload';	//访问文件起始,结尾无'/'

/* 主题选择 */
$config['theme']		='default';				//主题选择
$config['template']		='default';				//模板选择

/* 显示设置 */
$config['show']=array(
	'sitename'			=>'枫林sec内部XSS平台',		//网站名
	'sitedesc'			=>'盲打天下',					//一句话简介
	'keywords'			=>'xss',					//keywords
	'description'		=>'',					//description
	'adminmail'			=>'ohlinge@163.com'		//管理员邮箱
);

/* 积分等级设置 */
$config['point']=array(
	'award'=>array(
		'publish'		=>2,
		'comment'		=>2,
		'invitereg'		=>10 					//邀请注册奖励
	)
);

/* 其它设置 */
$config['timezone']		='Asia/Shanghai';		//时区，如UTC
$config['expires']		=3600;					//过期时长(秒)
$config['debug']		=false;					//调试模式(是否显示程序、数据库等错误)
?>
