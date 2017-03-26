<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

						<!-- Post -->
							<article class="post">
								<header>
									<div class="title">
										<h2><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
										<p><?php _e('标签: '); ?><?php $this->tags(', ', true, 'none'); ?></p>
									</div>
									<div class="meta">
										<time class="published" datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time>
										<a itemprop="name" href="<?php $this->author->permalink(); ?>" class="author"><span class="name"><?php $this->author(); ?></span><img src="<?php $this->options->headUrl() ?>" alt="" /></a>
									</div>
								</header>
								<p><?php $this->content(); ?></p>
								<footer>
								<?php $this->need('comments.php'); ?>
								</footer>
							</article>
</div><!-- end #main-->

<?php $this->need('footer.php'); ?>
