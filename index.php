<?php
/**
 * 基于HTML5UP-Future-Imperfect制作的Typecho主题。喵
 * 
 * @package JiWater 
 * @author 尚寂新
 * @version 2.0.0
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
	


<!-- 乱乱的翻页 --><!-- 代码来源:qqdie,略改 -->
<ul>     
<nav><?php $this->pageLink('<li class="button big previous">上一页</li>'); ?>
<?php $this->pageLink('<li class="button big next">下一页</li>','next'); ?></nav>
</ul>
<!-- 翻页结束喽 -->

</div>


<?php $this->need('footer.php'); ?>
