<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<div id='comment'>
<hr />
<div id='main'>
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

<div id='main' class="6u 12u$(medium)">
<ul id="li-<?php $comments->theId(); ?>" class="comment-body<?php 
if ($comments->levels > 0) {
    echo ' comment-child';
    $comments->levelsAlt(' comment-level-odd', ' comment-level-even');
} else {
    echo ' comment-parent';
}
$comments->alt(' comment-odd', ' comment-even');
echo $commentClass;
?>">

<h1>Ⅲ <?php $comments->author(); ?></h1><span class="image left"><?php $comments->gravatar('40', ''); ?></span>
<h4><?php $comments->date('Y-m-d H:i'); ?> <?php $comments->reply(); ?></h4>
<small><?php $comments->content(); ?></small>
	
	
<?php if ($comments->children) { ?>
    <div class="comment-children">
        <?php $comments->threadedComments($options); ?>
    </div>
<?php } ?>
</ul>
</div>
<?php } ?>

<!-- 小小分割线 -->
    <?php $this->comments()->to($comments); ?>
	<h3><?php $this->commentsNum(_t('暂无评论'), _t('仅有一条评论'), _t('已有 %d 条评论')); ?></h3>
    <?php if ($comments->have()): ?>
	

    <?php $comments->listComments(); ?>

    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
    <div id="<?php $this->respondId(); ?>" class="respond">
        <div class="cancel-comment-reply">
        <?php $comments->cancelReply(); ?>
        </div>
<hr />    
    	<h3 id="response"><?php _e('添加新评论'); ?></h3>
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

</div>