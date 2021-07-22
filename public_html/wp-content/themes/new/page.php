<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>
<div class="siteWrapper">
<div class="bodyWrapper container">
<div class="drawer-overlay">
<div class="main-container">
<?php if(is_page(array("1st-chance"))) { ?>
<div class="row-section row">
        <!-------------------- Your top main-left part ----------------------->
        <div class="col-sm-12 col-md-8">
          <div class="leftSection">
          <div class="category-Section">
              <div class="cat-heading-panel">
           <div id="post-<?php the_ID(); ?>" class="post">
            <h3 class="posttitle">
			<?php 
			$page_id = get_queried_object_id();
			echo get_the_title( $page_id );
			?>
            </h3>
            </div>
            </div>
           	  <div class="list-category clearfix">
			<?php 
            global $wp_query;
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; // for pagination
            $args = array( 'post_type' => '1st_chance', 'paged' => $paged, 'posts_per_page' => get_option('posts_per_page'), 'orderby' => 'date', 'order' => 'DESC' );
            query_posts($args);
            if(have_posts()):
            while (have_posts()) : the_post();
					$custom = get_post_custom($post->ID);
					$image_size = array('width' =>245 , 'height' => 154);
					$featuredurl=wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
					$thumb_url = $featuredurl[0];
					$alt= gia(get_post_thumbnail_id($post->ID));
					?>
                     <div class="nws-cat-box">
                    <div class="cat-block">
                    <?php if(!empty($thumb_url))  :?>
                    <div class="cat-image">
                    <img src="<?=bfi_thumb($thumb_url,$image_size); ?>" class="img-responsive" title="<?php echo $alt['title']; ?>" alt="<?php echo $alt['alt']; ?>" />
                    </div>
                    <?php endif; ?>
                    <div class="nws-cat-content">
                    <p class="postmeta"><span class="meta_date"><?php echo get_the_date(); ?></span></p>
                    <h3 class="posttitle"> <a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php echo wp_trim_words( get_the_title(), 6); ?></a></h3>
                    <p><?php echo the_content_limit(250); ?></p>
                    </div>
                    </div>
                    </div>
                    <?php endwhile; ?>
			<?php else : ?>
                <div class="category-Section">
                    <div class="cat-heading-panel">
                    <h3 class="posttitle"> Page Not Found</h3>
                    </div>
                    <div class="clear"></div>
                     <div class="nws-cat-box">
                      <div class="cat-block">
                      <?php _e('404, Page Not Found. You reached a page that has either been moved or is no longer available.'); ?>
                      </div>
                  </div>
                </div>
            <?php endif; ?>
            </div>
              <div class="paginate-panel">
				<?php 
                if (function_exists("pagination")) {
                echo  "<ul class=\"pagination\">";
                pagination($total_pages);
                echo "</ul>";
                } 
                wp_reset_query();
                ?>
        		</div>
          </div>
        </div>
        </div>
        <!--/*----------------------------*/--> 
        <!-------------------- Your top main-right part ----------------------->
         <div class="col-sm-12 col-md-4 col-lg-4 rightsidebar">
 			<?php include(TEMPLATEPATH. '/sidebar.php'); ?>
            </div>
        <!--/*----------------------------*/--> 
      </div>
<?php } elseif(is_shop() || is_cart() || is_checkout() || is_account_page()) { ?>

<div class="row-section row">
        <!-------------------- Your top main-left part ----------------------->
        <div class="col-sm-12 col-md-12">
          <div class="leftSection">
          <div class="category-Section">
              <div class="cat-heading-panel">
           <div id="post-<?php the_ID(); ?>" class="post">
            <h3 class="posttitle">
            <?php 
            $page_id = get_queried_object_id();
            echo get_the_title( $page_id );
            ?>
            </h3>
            </div>
            </div>
              <div class="list-category clearfix">
                  <div class="social-sharing-links clearfix"><div class="sharethis-inline-share-buttons"></div></div>
                <?php
                while (have_posts()) : the_post();
                $custom = get_post_custom($post->ID);
                ?>
                     
                   <?php echo the_content(); ?>
                   
                    <?php endwhile; ?>
            </div>
          </div>
        </div>
        </div>
        <!--/*----------------------------*/--> 
      </div>
<?php } else { ?>
<div class="row-section row">
        <!-------------------- Your top main-left part ----------------------->
        <div class="col-sm-12 col-md-8">
          <div class="leftSection">
          <div class="category-Section">
              <div class="cat-heading-panel">
           <div id="post-<?php the_ID(); ?>" class="post">
            <h3 class="posttitle">
			<?php 
			$page_id = get_queried_object_id();
			echo get_the_title( $page_id );
			?>
            </h3>
            </div>
            </div>
           	  <div class="list-category clearfix">
           	      <div class="social-sharing-links clearfix"><div class="sharethis-inline-share-buttons"></div></div>
				<?php
                while (have_posts()) : the_post();
                $custom = get_post_custom($post->ID);
                ?>
                     <div class="nws-cat-box">
                    <div class="cat-block">
                    <div class="nws-cat-content">
                   <?php echo the_content(); ?>
                    </div>
                    </div>
                    </div>
                    <?php endwhile; ?>
            </div>
          </div>
        </div>
        </div>
        <!--/*----------------------------*/--> 
        <!-------------------- Your top main-right part ----------------------->
         <div class="col-sm-12 col-md-4 col-lg-4 rightsidebar">
 			<?php include(TEMPLATEPATH. '/sidebar.php'); ?>
            </div>
        <!--/*----------------------------*/--> 
      </div>
<?php } ?>
</div>
</div>
</div>
</div>
<?php get_footer(); ?>