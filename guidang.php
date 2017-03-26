<?php   
/**  
    * 文章归档
    *  
    * @package custom
    */  
$this->need('header.php'); ?>   

<article class="post">
<header>
	<div class="title">
	<h2><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
	<?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
	<p><small>文章:<?php $stat->publishedPostsNum() ?>,分类:<?php $stat->categoriesNum() ?>,页面:<?php $stat->publishedPagesNum() ?>,评论:<?php $stat->publishedCommentsNum() ?></small></p>
	</div>
	<div class="meta">
		<p></p>
		<a itemprop="name" href="<?php $this->author->permalink(); ?>" class="author"><span class="name"><?php $this->author(); ?></span><img src="<?php $this->options->headUrl() ?>" alt="" /></a>
	</div>
</header>
<p>
  <?php
    Typecho_Widget::widget('Widget_Contents_Post_Recent', 'pageSize='.
    Typecho_Widget::widget('Widget_Stat')->publishedPostsNum)->to($archives);
    $date_y=0;$date_m=0;$output = '';$flag=0;
    while($archives->next()){
      $date_t = explode(",", date('Y,m,d', $archives->created));
      if($date_y > $date_t[0]){
        $date_m  = 0;
        $article_nums[] = $article_num;
        $output .= '</ul></li></ul>';
      }
      if($date_m > $date_t[1]){
        $article_nums[] = $article_num;
        $output .= '</ul></li>';
      }
      if($date_y != $date_t[0]){
        $date_y  = $date_t[0];
        $output .= '<h1>'.$date_y.' 年</h1><ul class="alt">';
      }
      if($date_m != $date_t[1]){
        $date_m  = $date_t[1];$article_num=0;
        $article_flag[] = $tmp_flag = 'archives_'.$flag++;
        $output .= '<li><h3>'.$date_m.' 月 <small> ('.$tmp_flag.' 篇文章)</small></h3><ul class="alt">';
      }
      $output .= '<li>'.$date_t[2].'日: <a href="'.$archives->permalink.'">'.$archives->title.'</a></li>';
      $article_num++;
    }
    $article_nums[] = $article_num;
    $output .= '</ul></li></ul>';
    echo str_replace($article_flag, $article_nums, $output);
  ?>
</p>
</article>   
</div>	

	
<?php $this->need('footer.php'); ?>  