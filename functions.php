<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;

function themeConfig($form) {
    $headUrl = new Typecho_Widget_Helper_Form_Element_Text('headUrl', NULL, NULL, _t('全站头像'), _t('在这里填入一个图片URL地址, 用作网站LOGO和博主(发博人)头像，推荐正方形'));
    $form->addInput($headUrl);
	$jiname = new Typecho_Widget_Helper_Form_Element_Text('jiname', NULL, NULL, _t('博客名称'), _t('会出现在电脑版左侧栏大标题上，手机版banner(首)栏大标题上'));
    $form->addInput($jiname);
    $jijianjie = new Typecho_Widget_Helper_Form_Element_Text('jijianjie', NULL, NULL, _t('博客简介'), _t('一句话即可，生成在大标题的下面，可以使用html标签'));
    $form->addInput($jijianjie);
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
	$jiback = new Typecho_Widget_Helper_Form_Element_Text('jiback', NULL, NULL, _t('自定义背景图片'), _t('不填则无 前面需要加http或https或//或者填绝对路径'));
    $form->addInput($jiback);
	$titleintro = new Typecho_Widget_Helper_Form_Element_Text('titleintro', NULL, NULL, _t('网站副标题'), _t('只会在index显示 不要太长 效果：XX博客 - 副标题'));
    $form->addInput($titleintro);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}


/*
function themeFields($layout) {
    $logoUrl = new Typecho_Widget_Helper_Form_Element_Text('logoUrl', NULL, NULL, _t('站点LOGO地址'), _t('在这里填入一个图片URL地址, 以在网站标题前加上一个LOGO'));
    $layout->addItem($logoUrl);
}
*/

