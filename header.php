<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
		
    <!-- CSS引用 -->
	<!--[if lte IE 8]><script src="<?php $this->options->themeUrl('assets/js/ie/html5shiv.js'); ?>"></script><![endif]-->
	<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>" />
	<!--[if lte IE 9]><link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/ie9.css'); ?>" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/ie8.css'); ?>" /><![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>

</head>
<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<h1><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
						<nav class="links">
							<ul>
								<li><a href="<?php $this->options->siteUrl(); ?>">首页</a></li>
								<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
								<?php while($pages->next()): ?>
								<li><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
								<?php endwhile; ?>
							</ul>
						</nav>
						<nav class="main">
							<ul>
								<li class="search">
									<a class="fa-search" href="#search">搜索</a>
									<form id="search" method="post" action="./" role="search">
										<input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
									</form>
								</li>
								<li class="menu">
									<a class="fa-bars" href="#menu">目录</a>
								</li>
							</ul>
						</nav>
					</header>

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="post" action="./" role="search">
									<input type="text" name="s" class="text" placeholder="<?php _e('输入关键字搜索'); ?>" />
								</form>
							</section>

						<!-- Links -->
							<section>
								<ul class="links">
								<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
								<?php while($pages->next()): ?>
									<li>
										<a href="<?php $pages->permalink(); ?>">
											<h3 class="fa fa-th-list">&nbsp;<?php $pages->title(); ?></h3>

										</a>
									</li>
									<?php endwhile; ?>
								</ul>
							</section>

						<!-- Actions -->
							<section>
								<ul class="actions vertical">
									<li><a href="<?php $this->options->siteUrl(); ?>admin/" class="button big fit">后台登陆</a></li>
								</ul>
							</section>

					</section>

<div id="main">
