<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $headUrl = new Typecho_Widget_Helper_Form_Element_Text('headUrl', NULL, NULL, _t('全站头像'), _t('在这里填入一个图片URL地址, 用作网站LOGO和博主(发博人)头像，推荐正方形'));
    $form->addInput($headUrl);
	$jiname = new Typecho_Widget_Helper_Form_Element_Text('jiname', NULL, NULL, _t('博客名称'), _t('会出现在电脑版左侧栏大标题上，手机版banner(首)栏大标题上'));
    $form->addInput($jiname);
    $jijianjie = new Typecho_Widget_Helper_Form_Element_Text('jijianjie', NULL, NULL, _t('博客简介'), _t('一句话即可，生成在大标题的下面，可以使用html标签'));
    $form->addInput($jijianjie);
	$jiabout = new Typecho_Widget_Helper_Form_Element_Text('jiabout', NULL, NULL, _t('关于博客'), _t('100字左右(总之短点)，显示在footer上面，简短一个大概述就行'));
    $form->addInput($jiabout);
    $jiaboutlink = new Typecho_Widget_Helper_Form_Element_Text('jiaboutlink', NULL, NULL, _t('关于地址'), _t('“详细介绍”的指向地址，生成在footer的上面，推荐去后台新增“关于”页面，然后指向该页面地址'));
    $form->addInput($jiaboutlink);
	$githublink = new Typecho_Widget_Helper_Form_Element_Text('githublink', NULL, NULL, _t('Footer-Github'), _t('填入你github的地址，显示在Footer区'));
    $form->addInput($githublink);
	$weibolink = new Typecho_Widget_Helper_Form_Element_Text('weibolink', NULL, NULL, _t('Footer-WeiBo'), _t('填入你微博的地址，显示在Footer区'));
    $form->addInput($weibolink);
	$steamlink = new Typecho_Widget_Helper_Form_Element_Text('steamlink', NULL, NULL, _t('Footer-Steam'), _t('填入你Steam的地址，显示在Footer区'));
    $form->addInput($steamlink);
	$RSSlink = new Typecho_Widget_Helper_Form_Element_Text('RSSlink', NULL, NULL, _t('Footer-RSS地址'), _t('填入你博客RSS的地址，显示在Footer区'));
    $form->addInput($RSSlink);
	$maillink = new Typecho_Widget_Helper_Form_Element_Text('maillink', NULL, NULL, _t('Footer-邮箱'), _t('填入你邮箱的地址，显示在Footer区，填法为“mailto:yourmail@xx.com”'));
    $form->addInput($maillink);
	$jifooter = new Typecho_Widget_Helper_Form_Element_Text('jifooter', NULL, NULL, _t('自定义Footer文字'), _t('可以输入友情链接网站统计什么的，可以用Html和js'));
    $form->addInput($jifooter);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

