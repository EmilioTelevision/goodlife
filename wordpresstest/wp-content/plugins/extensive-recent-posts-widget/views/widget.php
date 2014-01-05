<?php if (!empty($title)){	echo $before_title.$title.$after_title;}?><section class="cw-erpv-posts-section"><ul class="cw-erpv-posts"><?php $erpw_query = new WP_Query( array('cat' => $category, 'posts_per_page' => $post_count, 'orderby' => $order_field, 'order' => $order_type, 'nopagging' => true,'ignore_sticky_posts' => 1));while ($erpw_query->have_posts()) : $erpw_query->the_post();?><li class="cw-erpv-post"><article><div class="cw-erpv-post-wrapper"><?php if($show_post_thumbnail){?><div class="cw-erpv-post-thumbnail"><?php if(has_post_thumbnail()){?><a href="<?php the_permalink(); ?>" class="post-thumbnail-link" style="width:<?php echo $post_thumbnail_width; ?>px;height:<?php echo $post_thumbnail_height; ?>px;"><?php the_post_thumbnail(array($post_thumbnail_width,$post_thumbnail_height), array('title' => '', 'class' => '')); ?></a><?php }else{?><a href="<?php the_permalink(); ?>" class="post-thumbnail-link no-thumb" style="width:<?php echo $post_thumbnail_width; ?>px;height:<?php echo $post_thumbnail_height; ?>px;"></a><?php }?></div><?php }?><div class="cw-erpv-post-content <?php echo($show_post_thumbnail)?'cw-erpv-post-short':'';?>"><?php$layout_title='';$layout_author='';$layout_date='';$layout_comments_count='';$layout_post_tags='';$layout_post_excerpt='';//Generate Post Titleif($show_post_title){$layout_title='<header>';$layout_title.='<h4><a href="'.get_permalink().'" title="'.get_the_title().'">'.get_the_title().'</a></h4>';$layout_title.='</header>';}//Generate Post Authorif($show_post_author){$layout_author='<span class="post-author">'.get_the_author().'</span>';}//Generate Post Dateif($show_post_date){$layout_date='<span class="post-date">'.get_the_time($post_date_format).'</span>';}//Generate Post Commentsif($show_post_comments_count){$num_comments=get_comments_number(); // get_comments_number returns only a numeric valueif(comments_open()){	if ($num_comments==0) {		$comments=__('No Comments');	} elseif($num_comments > 1) {		$comments=$num_comments.__(' Comments');	} else {		$comments=__('1 Comment');	}	$write_comments='<a href="'.get_comments_link().'">'.$comments.'</a>';} else {	//$write_comments= __('Comments are off for this post.');	$write_comments='';}$layout_comments_count='<span class="post-comments-count">'.$write_comments.'</span>';}//Generate Post Tagsif($show_post_tags){$layout_post_tags='<span class="post-tags">'.get_the_tag_list('Tags: ',', ').'</span>';}//Generate Post Excerptif($show_post_excerpt){$excerpt = get_the_excerpt();$post_content=wp_trim_words($excerpt,$post_excerpt_size);$layout_post_excerpt='<p>';$layout_post_excerpt.=$post_content;if($post_excerpt_link){$layout_post_excerpt.=' <a href="'.get_permalink().'" title="'.get_the_title().'">'.$post_excerpt_link.'</a>';}$layout_post_excerpt.='</p>';}//PARSING LAYOUT$post_layout=nl2br($post_layout);$post_layout_array = explode("<br />", $post_layout);$layout_tags=array('[TITLE]','[DATE]','[AUTHOR]','[EXCERPT]','[COMMENT-COUNT]','[TAGS]'); //List all layout tags$layout_block_tags=array('[TITLE]','[EXCERPT]'); // List tags that are is no need to wrap into <p>$layout_variables=array($layout_title,$layout_date,$layout_author,$layout_post_excerpt,$layout_comments_count,$layout_post_tags);$layout_final='';foreach($post_layout_array as $layout_line){$pos_tags=$this->strstr_array($layout_line, $layout_block_tags);if ($pos_tags==false) { // if need to wrap into <p> tag$layout_line='<p>'.$layout_line.'</p>';}else{//$layout_line='<div>'.$layout_line.'</div>';}$layout_final.=$layout_line;}$layout_final=str_replace($layout_tags,$layout_variables,$layout_final);echo $layout_final;?></div></div></article></li><?php endwhile;wp_reset_query();wp_reset_postdata();?></ul></section>