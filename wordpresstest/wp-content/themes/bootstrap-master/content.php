<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
  
  <header>
  
    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail( 'wpbs-featured' ); ?></a>
    
    <div class="page-header">      

      <h1 class="the_category"><?php the_category(); ?></h1>
    </div>
      
  </header> <!-- end article header -->

  <section class="post_content clearfix">

    <?php the_content( __("Read more &raquo;","bonestheme") ); ?>
       

  </section> <!-- end article section -->
  
  <footer>
    <p class="meta"><?php _e("Posted", "bonestheme"); ?> <time datetime="<?php echo the_time('Y-m-j'); ?>" pubdate><?php the_date(); ?></time> <?php _e("by", "bonestheme"); ?> <?php the_author_posts_link(); ?> <span class="amp">&</span> <?php _e("filed under", "bonestheme"); ?> <?php the_category(', '); ?>.</p>

    <p class="tags"><?php the_tags('<span class="tags-title">' . __("Tags","bonestheme") . ':</span> ', ' ', ''); ?></p>
    
  </footer> <!-- end article footer -->

</article> <!-- end article -->
