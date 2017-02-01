<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<article class="post">
        <h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
</article>
        <?php if ($this->have()): ?>
    	<?php while($this->next()): ?>
		<article class="post">
			<header>
				<div class="title">
					<h2><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					<p><i class="fa fa-archive" aria-hidden="true"></i>&nbsp;<?php $this->category(','); ?>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-comments" aria-hidden="true"></i>&nbsp;<a href='<?php $this->permalink() ?>#comment'><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></p>
				</div>
				<div class="meta">
					<time class="published" datetime="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?></time>
					<a href="<?php $this->author->permalink(); ?>" class="author"><span class="name"><?php $this->author(); ?></span><img src="<?php $this->options->headUrl() ?>"/></a>
				</div>
				</header>
				<p><?php $this->excerpt('233','...'); ?></p>
				<footer>
					<ul class="actions">
						<li><a href="<?php $this->permalink() ?>" class="button big">继续阅读</a></li>
					</ul>
				</footer>
			</article>
    	<?php endwhile; ?>
        <?php else: ?>
            <article class="post">
                <h2 class="post-title"><?php _e('没有找到内容'); ?></h2>
            </article>
        <?php endif; ?>

<ul class="actions pagination">
	<li class="button big"><?php $this->pageLink('上一页'); ?></li>
	<li class="button big"><?php $this->pageLink('下一页','next'); ?>&nbsp;&nbsp;&nbsp;&nbsp;</li>
</ul>
    </div><!-- end #main -->


	<?php $this->need('sidebar.php'); ?>
	<?php $this->need('footer.php'); ?>
