<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
				<!-- 侧栏Sidebar -->
					<section id="sidebar">

						<!-- Intro -->
							<section id="intro">
								<a href="<?php $this->options->siteUrl(); ?>" class="logo"><img src="<?php $this->options->headUrl() ?>" alt="" /></a>
								<header>
									<h2><?php $this->options->jiname() ?></h2>
									<p><?php $this->options->jijianjie() ?></p>
								</header>
							</section>


							<section>
								<h2>最新文章<h2>
								<ul class="posts">
								<?php $this->widget('Widget_Contents_Post_Recent')
										->parse('
									<li>
										<article>
											<header>
												<h3><a class="fa fa-bookmark" href="{permalink}">&nbsp;{title}</a></h3>
											</header>
										</article>
									</li>'
									); ?>
								</ul>
							</section>
							<section>
								<h2>分类目录<h2>
								<ul class="posts">
									<li>
										<article>
											<header>
												<h3><?php $this->widget('Widget_Metas_Category_List')->listCategories('wrapClass=posts'); ?></h3>
											</header>
										</article>
									</li>
								</ul>
							</section>
							<section>
								<h2>标签云<h2>
								<?php $this->widget('Widget_Metas_Tag_Cloud')->to($tags); ?>  
								<?php while($tags->next()): ?>
										<a rel="tag" href="<?php $tags->permalink(); ?>"><code><small><?php $tags->name(); ?></small></code></a>
								<?php endwhile; ?>
							</section>

						<!-- About -->
							<section class="blurb">
								<h2>关于</h2>
								<p><?php $this->options->jiabout() ?></p>
								<ul class="actions">
									<li><a href="<?php $this->options->jiaboutlink() ?>" class="button">详细介绍</a></li>
								</ul>
							</section>
						<!-- Footer -->

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

					</section>

			</div>
							
							
</div><!-- end #sidebar -->
