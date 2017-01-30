<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"<?php $this->options->duoshuoname() ?>"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->



<?php $this->footer(); ?>


		<!-- Scripts -->
			<script src="<?php $this->options->themeUrl('assets/js/jquery.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/skel.min.js'); ?>"></script>
			<script src="<?php $this->options->themeUrl('assets/js/util.js'); ?>"></script>
			<!--[if lte IE 8]><script src="<?php $this->options->themeUrl('assets/js/ie/respond.min.js'); ?>"></script><![endif]-->
			<script src="<?php $this->options->themeUrl('assets/js/main.js'); ?>"></script>
			<script>
			eval(function(d,f,a,c,b,e){b=function(a){return a.toString(f)};if(!"".replace(/^/,String)){for(;a--;)e[b(a)]=c[a]||b(a);c=[function(a){return e[a]}];b=function(){return"\\w+"};a=1}for(;a--;)c[a]&&(d=d.replace(new RegExp("\\b"+b(a)+"\\b","g"),c[a]));return d}('i(a.2&&a.2.4)2.4("\\3 %c h 1.0.0 %c g://f.e \\3\\3","d: #b; 9: #8; 7:6 0;","d: #8;9: #b; 7:6 0;");',19,19,"  console n log  5px padding 89c3eb background window eaf4fc  color pw jixinz http JiWater if".split(" "),0,{}));
			</script>
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
	<style>
</body>
</html>
