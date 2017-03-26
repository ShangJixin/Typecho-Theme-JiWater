<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!-- 自定义评论样式模块开始 -->
<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';
        } else {
            $commentClass .= ' comment-by-user';
        }
    }

    $commentLevelClass = $comments->levels > 0 ? ' comment-child' : ' comment-parent';
?>

<ul id="li-<?php $comments->theId(); ?>" class="posts comment-body<?php 
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">
<li id="<?php $comments->theId(); ?>">
<hr />
<article>
	<header>
		<h3><?php $comments->author(); ?> <span class="comment-reply"><?php $comments->reply(); ?></span></h3>
			<time class="published"><?php $comments->date('Y-m-d H:i'); ?></time>
			<p><?php $comments->content(); ?></p>
	</header>
		<a href="#" class="image">
<?php
//头像CDN by Rich
$host = 'https://cdn.v2ex.com'; //自定义头像CDN服务器
$url = '/gravatar/'; //自定义头像目录,一般保持默认即可
$size = '40'; //自定义头像大小
$rating = Helper::options()->commentsAvatarRating;
$hash = md5(strtolower($comments->mail));
$avatar = $host . $url . $hash . '?s=' . $size . '&r=' . $rating . '&d=';
?>
<img class="bsavatar" src="<?php echo $avatar ?>"></a>
</article>




</li>
<?php if ($comments->children) { ?>
    <div class="comment-children">
<ol>
<blockquote>
        <?php $comments->threadedComments($options); ?>
</blockquote>
</ol>
    </div>
<?php } ?>
</ul>
<?php } ?>
<!-- 模块结束 评论开始 -->
<div id="comments">
<?php $this->comments()->to($comments); ?>
        <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
<hr />    
    	<h3 id="response"><?php _e('添加新评论'); ?> <small><?php $comments->cancelReply(); ?></small></h3>
    	<form method="post" action="<?php $this->commentUrl() ?>">
		<div class="row uniform">	
			<div class="6u 12u$(xsmall)">
                <textarea rows="8" cols="50" name="text" id="textarea" placeholder="输入你的评论吧~" class="textarea" required ><?php $this->remember('text'); ?></textarea>
            </div>
			<?php if($this->user->hasLogin()): ?>
			
			<div class="6u 12u$(xsmall)">
    			<input type="text" name="author" id="author" class="text" disabled="disabled" placeholder="君の名は" value="<?php $this->user->screenName(); ?>" required />
    		</div>
    		<div class="6u 12u$(xsmall)">
    			<input type="email" name="mail" id="mail" class="text" disabled="disabled" placeholder="EMail" value="Free input !"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</div>
    		<div class="6u 12u$(xsmall)">
    			<input type="text" name="url" id="url" class="text" disabled="disabled" placeholder="Website" value="Free input !"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
			</div>
			
			
			<?php else: ?>
    		<div class="6u 12u$(xsmall)">
    			<input type="text" name="author" id="author" class="text" placeholder="君の名は" value="<?php $this->remember('author'); ?>" required />
    		</div>
    		<div class="6u 12u$(xsmall)">
    			<input type="email" name="mail" id="mail" class="text" placeholder="EMail" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
    		</div>
    		<div class="6u 12u$(xsmall)">
    			<input type="text" name="url" id="url" class="text" placeholder="Website" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
    		</div>
            <?php endif; ?>
    		<div class="6u 12u$(xsmall)">
                <button type="submit" class="submit"><?php _e('提交评论'); ?></button><input type="reset" value="点我复位" /><?php if($this->user->hasLogin()): ?><a class="button small" href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出登陆'); ?></a><?php endif; ?>
            </div>
		</div>
    	</form>
    </div>
    <?php else: ?>
    <h3><?php _e('评论已关闭'); ?></h3>
    <?php endif; ?>
    <?php if ($comments->have()): ?>
    
    <?php $comments->listComments(); ?>

    <div align="center"><?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?></div>
    
    <?php endif; ?>

</div>