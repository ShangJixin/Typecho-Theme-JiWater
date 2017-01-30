<?php
/**
 * 基于HTML5UP-Future-Imperfect制作的Typecho主题。
 * 
 * @package JiWater 
 * @author 尚寂新
 * @version 1.0
 * @link http://jixinz.pw
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>


	<?php while($this->next()): ?>
		<article class="post">
			<header>
				<div class="title">
					<h2><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
					<p><?php $this->excerpt('233','...'); ?></p>
				</div>
				<div class="meta">
					<time class="published" datetime="<?php $this->date('c'); ?>"><?php $this->date('F j, Y'); ?></time>
					<a href="<?php $this->author->permalink(); ?>" class="author"><span class="name"><?php $this->author(); ?></span><img src="<?php $this->options->headUrl() ?>"/></a>
				</div>
				</header>
				<footer>
					<ul class="actions">
						<li><a href="<?php $this->permalink() ?>" class="button big">继续阅读</a></li>
					</ul>
					<ul class="stats">
						<li class="icon fa-archive">&nbsp;<?php $this->category(','); ?></li>
						<li class="icon fa-comment">&nbsp;<a href='<?php $this->permalink() ?>#comment'><span class="ds-thread-count" data-thread-key="<?php echo $this->cid;?>"></span></a></li>
						
					</ul>
				</footer>
			</article>
	<?php endwhile; ?>
	
<?php $this->pageNav('上一页', '下一页', 3, '...', 'wrapTag=ol&wrapClass=actions pagination&itemTag=links&textTag=links¤tClass=links&prevClass=button big previous&nextClass=button big next'); ?>
</div>


<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
