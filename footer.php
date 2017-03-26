<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>


<?php $this->footer(); ?>

<section id="footer">
								<ul class="icons">
									<li><a href="<?php $this->options->githublink() ?>" class="fa-github"><span class="label">Github</span></a></li>
									<li><a href="<?php $this->options->weibolink() ?>" class="fa-weibo"><span class="label">WeiBo</span></a></li>
									<li><a href="<?php $this->options->steamlink() ?>" class="fa-steam"><span class="label">Steam</span></a></li>
									<li><a href="<?php $this->options->RSSlink() ?>" class="fa-rss"><span class="label">RSS</span></a></li>
									<li><a href="<?php $this->options->maillink() ?>" class="fa-envelope"><span class="label">Email</span></a></li>
								</ul>
								<p class="copyright"><?php $this->options->jifooter() ?></p>
								<p class="copyright">&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>. </p>
								<p class="copyright"><?php _e('Power by <a href="http://www.typecho.org">Typecho</a>'); ?>.<?php _e('Theme  <a href="https://github.com/ShangJixin/Typecho-Theme-JiWater">JiWater</a>'); ?>.</p>
							</section>
		<!-- Scripts -->
			<script src="<?php $this->options->themeUrl('assets/js/jquery.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/skel.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/util.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/main.js'); ?>"></script>
			<script>
			eval(function(d,f,a,c,b,e){b=function(a){return a.toString(f)};if(!"".replace(/^/,String)){for(;a--;)e[b(a)]=c[a]||b(a);c=[function(a){return e[a]}];b=function(){return"\\w+"};a=1}for(;a--;)c[a]&&(d=d.replace(new RegExp("\\b"+b(a)+"\\b","g"),c[a]));return d}('i(a.2&&a.2.4)2.4("\\3 %c h 2.0.0 %c g://f.e \\3\\3","d: #b; 9: #8; 7:6 0;","d: #8;9: #b; 7:6 0;");',19,19,"  console n log  5px padding 89c3eb background window eaf4fc  color pw jixinz http JiWater if".split(" "),0,{}));
			</script>
</body>
</html>
