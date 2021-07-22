<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header();
 ?>
 <?php get_header(); ?>
<div class="siteWrapper">
    		<div class="bodyWrapper container">
    <div class="drawer-overlay">
        <div class="main-container" data-sticky-sidebar-container>
          <div class="row-section row">
        <!-------------------- Your top main-left part ----------------------->
        <div class="col-sm-12 col-md-8">
          <div class="leftSection">
          <div class="category-Section">
          <?php if (have_posts()) : ?>
              <div class="cat-heading-panel">
           <div id="post-<?php the_ID(); ?>" class="post">
          <?php $post = $posts[0];  ?>
			<?php /* If this is a category archive */ 
            if (is_category()) { ?>
            <h3 class="posttitle"><?php single_cat_title(); ?></h3>
            <?php } elseif (is_tag() ) { ?>
            <h3 class="posttitle"><?php single_cat_title(); ?></h3>
            <?php 
            } elseif (is_tax('type') ) { ?>
            <h3 class="posttitle"><?php echo single_term_title( "", false ); ?></h3>
            <?php 
            } 
            ?>
            </div>
            </div>
            <?php endif; ?>
           	  <div class="list-category clearfix">
             <?php 
			  if (have_posts()) :
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
            <!-- Add space -->
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
                
		ADD SPACE
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
</div>
  </div>
</div>
</div>
<!-- End Main Body -->
<?php get_footer(); ?>
