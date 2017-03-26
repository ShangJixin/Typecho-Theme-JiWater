<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php if ($this->is('post')) : ?>
    <meta property="og:type" content="article"/>
    <meta property="article:published_time" content="<?php $this->date('c'); ?>"/>
    <meta property="article:author" content="<?php $this->author(); ?>" />
    <meta property="article:published_first" content="<?php $this->options->title() ?>, <?php $this->permalink() ?>" />
    <meta property="og:title" content="<?php $this->title() ?>" />
    <meta property="og:url" content="<?php $this->permalink() ?>" />
    <?php endif; ?>
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?><?php if ($this->is('index')) : ?> - <?php $this->options->titleintro() ?><?php endif; ?></title>
		
    <!-- CSS引用 -->
	<link rel="stylesheet" href="<?php $this->options->themeUrl('assets/css/main.css'); ?>" />

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
	<style type="text/css">
	::-webkit-scrollbar,::-webkit-scrollbar-track {
	background-color: hsla(0,0%,100%,0)
	}
	::-webkit-scrollbar {
	width: 6px
	}
	::-webkit-scrollbar-thumb {
	border-radius: 3px;
	background-color: #c1c1c1
	}
	body {
	background: url(<?php $this->options->jiback() ?>) no-repeat 100%;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
        background-position: left top;

	}
	.bsavatar { border-radius: 50%; }
			.comment-list {
			list-style: none;
			padding-left: 0;
		}
				ol.page-navigator {
			cursor: default;
			list-style: none;
			padding-left: 0;
		}

			ol.page-navigator li {
				display: inline-block;
				padding: 0 1em 0 0;
			}
	</style>
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
											<h3><?php $pages->title(); ?></h3>
											<p>点我进入『<?php $pages->title(); ?>』页面</p>
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
					<section>

						<!-- Intro -->
							<section id="intro">
								<a href="<?php $this->options->siteUrl(); ?>" class="bsavatar"><img src="<?php $this->options->headUrl() ?>" alt="logo" class="bsavatar"/></a>
								<header>
									<h2><?php $this->options->jiname() ?></h2>
									<p><?php $this->options->jijianjie() ?></p>
								</header>
							</section>
					</section>
