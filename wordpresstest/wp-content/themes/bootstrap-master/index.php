<?php get_header(); ?>
			
			<?php
				$blog_hero = of_get_option('blog_hero');
				if ($blog_hero){
			?>

			<div class="clearfix row-fluid">
				<div class="span12">
					<div class="span8" style="border-right: 1px solid black; padding-right: 10px;">
										 <!-- Carousel
					    ================================================== -->
					    <div id="myCarousel" class="carousel slide  " data-ride="carousel">
					    	<?php echo do_shortcode('[bootstrapslider]'); ?>
					    </div><!-- /.carousel -->

					    <div class"span8" >

									    <div class="top_features fluid-sidebar sidebar span4 hidden-phone">
											<p class="sidebar_title">TOP FEATURES</p>
											<div class="features">
												<ul class="feature_list">
													<?php query_posts('cat=4&showposts=12'); ?>
													<?php while (have_posts()) : the_post(); ?>
													<?php get_template_part( 'content-image', get_post_format()); ?>
													<li style="list-style-type:none;">
														
														<a class="the_category"><?php the_category(); ?></a>
														<a class="the_title" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
														<a class="the_author" ><p class="author"><?php _e('posted by '); ?><?php the_author(); ?></p></a>
														<img class="the_line" src="<?php bloginfo('url');?>/wp-content/themes/bootstrap-master/images/small_line.png" width="199" alt="smallline"/>
													</li>
													<?php endwhile; ?>
													<?php wp_reset_query(); ?>
												</ul>
											</div>
										</div>

									    <div id="main" class="span8 clearfix" role="main">
											<?php query_posts( 'cat=-4,-14&showposts=5' );?>
											<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

												<?php get_template_part( 'content', get_post_format()); ?>					
											<?php endwhile; ?>	
											
											<?php if (function_exists('page_navi')) { // if expirimental feature is active ?>
												
												<?php page_navi(); // use the page navi function ?>
												
											<?php } else { // if it is disabled, display regular wp prev & next links ?>
												<nav class="wp-prev-next">
													<ul class="clearfix">
														<li class="prev-link"><?php next_posts_link(__('&laquo; Older Entries', "bonestheme")) ?></li>
														<li class="next-link"><?php previous_posts_link(__('Newer Entries &raquo;', "bonestheme")) ?></li>
													</ul>
												</nav>
											<?php } ?>		
											
											<?php else : ?>
											
											<article id="post-not-found">
											    <header>
											    	<h1><?php _e("Not Found", "bonestheme"); ?></h1>
											    </header>
											    <section class="post_content">
											    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "bonestheme"); ?></p>
											    </section>
											    <footer>
											    </footer>
											</article>
											
											<?php endif; ?>
									
										</div> <!-- end #main -->

					    </div><!-- nested span8-->



					</div><!-- span8-->
					     <?php get_sidebar(); // sidebar 1 ?>



				

				</div><!-- span12 -->

			   <!-- End of row
					    ================================================== -->
    
			</div>

			<?php
				}
			?>
			
			

<?php get_footer(); ?>
