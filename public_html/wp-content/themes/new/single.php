<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

global $post;
$post_id      = get_the_id();
if(get_post_type()=='gallery') {
$terms        = get_the_terms( $post_id , 'type', 'string');
$cname		= $terms[0]->name;
$term_id		= $terms[0]->slug;
} elseif(get_post_type()=='video') {
$terms        = get_the_terms( $post_id , 'type', 'string'); 
$cname		= $terms[0]->name;
$term_id		= $terms[0]->slug;
} elseif(get_post_type()=='1st_chance') {
$cname		= '1st Chance';
} else {
$terms        = get_the_terms( $post_id , 'category', 'string'); 
$cname		= $terms[0]->name;
}
get_header(); ?>

<div class="siteWrapper">
<div class="bodyWrapper container">
            <div class="drawer-overlay">
	          <div class="main-container" data-sticky-sidebar-container>
                <div class="row-section row">

                    <div class="col-sm-12 col-md-8 col-lg-9">

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8768534328781288"
     crossorigin="anonymous"></script>
<!-- ads1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8768534328781288"
     data-ad-slot="6811674647"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>


                        <div class="leftSection">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                            $this_page_category = get_the_category( $post->ID );
                            $custom1            = get_post_custom( $post->ID );
                            $author=simple_fields_value('author');
                            $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
							$alt= gia(get_post_thumbnail_id(get_post_thumbnail_id($post->ID)));
                            ?>
                            <!--Start: Other Normal Post>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
                            <div class="detail-Section">
                            <div class="heading-panel">

                            <h1 class="extraBigposttitle"><?php the_title(); ?></h1></div>


                            <div class="social-sharing-links clearfix"><div class="sharethis-inline-share-buttons"></div></div>
                            <div class="detail-prefericenes">
                                <ul class="flex detailPrefe">
                                    <li><div class="postFooter">
													<!--<?php if ( $custom1['npauthor'][0] != "" ) { ?>
														<span class="npauthor"><?php echo $custom1['npauthor'][0]; ?></span>
													<?php } elseif($author) { ?>
                                                    <?php echo $author; ?>
                                                    <?php } else { ?>
                                                    Pmstnepal
                                                    <?php } ?>-->
												</div></li>
                                    <li><div class="publishedHrs"><?php echo get_the_date(); ?></div></li>
                                    <?php if(get_post_type()=='video' || get_post_type()=='gallery') { ?>
                                    <li><div class="mukhyaKhabar"><?php echo $cname; ?></div></li>
                                    <?php } else { ?>
                                    <li><div class="mukhyaKhabar"><?php the_category( ', ' ) ?></div></li>
                                    <?php } ?>
                                </ul>
                            </div>
                                    <div class="description-panel">
                                    <div class="news-detail">
                                        <?php if(get_post_type()!='video') { ?>
                                     <?php if (!empty($image)) { ?>
                                    <div class="imageFor-detail">
                                    <div class="detail-imageContainer">
                                    <img src="<?php echo $image['0']; ?>"  title="<?php echo $alt['title']; ?>" alt="<?php echo $alt['alt']; ?>"/>
                                    </div>
                                    </div> 
                                    <?php } ?>
                                    <?php } ?>
                                    <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12">
                                    <?php the_content(); ?>
                                    </div>
                                    </div>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8768534328781288"
     crossorigin="anonymous"></script>
<!-- ads1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8768534328781288"
     data-ad-slot="6811674647"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
	
                                    <div class="pub-date">
                                    <font style="font-style: italic;"><?php echo get_the_date(); ?>  Published</font>
                                    </div>
                                    <div class="linermaker"></div>
                                    </div>
                                    <div class="spacer"></div>

 	                            <h2 class="posttitle color-light">Comments:</h2>
                                    <!--facebook comment box -->
                                    <!-- Facebook Comments Plugin for WordPress: http://peadig.com/wordpress-plugins/facebook-comments/ -->
                                    
<?php //echo do_shortcode('[fbcomments url="" width="848" count="off" num="5" countmsg="wonderful comments!"]'); ?>								
									<?php echo do_shortcode('[fbcomments]');?>
                                    <!-- end here --> 
                                    <div class="spacer"></div>
                                    
                                    <div class="pmst-nws-post">
                                       <!-- <?php
													remove_all_filters('posts_orderby');
													if(get_post_type()=='gallery') {
														$args= array(
															'posts_per_page' => 15,
															'post__not_in'   => array( $post->ID ),
															'offset' => 0,
															'type' => $term_id,
															'orderby' => 'date',
															'order' => 'DESC',
															'post_type' => 'gallery',
															'post_status' => 'publish',
															'caller_get_posts'=>1,
															'suppress_filters' => true 
														); 
													} elseif(get_post_type()=='video') {
														$args= array(
															'posts_per_page' => 15,
															'post__not_in'   => array( $post->ID ),
															'offset' => 0,
															'type' => $term_id,
															'orderby' => 'date',
															'order' => 'DESC',
															'post_type' => 'video',
															'post_status' => 'publish',
															'caller_get_posts'=>1,
															'suppress_filters' => true 
														); 
													} elseif(get_post_type()=='1st_chance') {
														$args= array(
															'posts_per_page' => 15,
															'post__not_in'   => array( $post->ID ),
															'offset' => 0,
															'orderby' => 'date',
															'order' => 'DESC',
															'post_type' => '1st_chance',
															'post_status' => 'publish',
															'caller_get_posts'=>1,
															'suppress_filters' => true 
														); 
													} else {
														$args= array(
															'posts_per_page' => 15,
															'post__not_in'   => array( $post->ID ),
															'offset' => 0,
															'category__in' => wp_get_post_categories($post->ID),
															'orderby' => 'date',
															'order' => 'DESC',
															'post_type' => 'post',
															'post_status' => 'publish',
															'caller_get_posts'=>1,
															'suppress_filters' => true 
														); 
													}
													$my_query    = null;
													$my_query    = new WP_Query( $args );
													?> -->
                                   <?php if($my_query->found_posts>5) { ?> <div class="postName">
                                    <span>Related <?php echo $cname; ?> :</span>


                                    </div><?php } ?>
                                    <div class="row">
                                        <?php
													if($my_query->found_posts>5) { 
													if ( $my_query->have_posts() ) {
														$num_item = 5;
														$current_col = 0;
														?>
																<?php
																while ( $my_query->have_posts() ) : $my_query->the_post();
																	?>
																	<?php if ($current_col == 0) { ?>
                                                                    <div class="col-md-4"><ul>  
																	<?php } ?>
																	<li><a href="<?php the_permalink(); ?>"
																	       rel="bookmark"
																	       title="<?php the_title(); ?>"><?php the_title(); ?></a>
																	</li>
																	<?php  if ($current_col == $num_item - 1) { 
                                                                    $current_col = 0;
                                                                    ?>
                                                                    </ul></div>
                                                                    <?php } else {
                                                                        $current_col++;            
                                                                    } 
                                                                    ?>
																<?php endwhile; ?>
														<?php
													}
													}
													wp_reset_query();
													?>
													<?php if($cname=='Models' || $cname=='Trending Nepal') { ?> </div> <?php } ?>

                                    </div>
                                   
                                    </div>
                                    </div> 
                                    <!--End: Other Normal Post<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
                            <?php endwhile; ?>
                            <?php endif; ?>
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8768534328781288"
     crossorigin="anonymous"></script>
<!-- ads1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8768534328781288"
     data-ad-slot="6811674647"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                           
                                </div>
                           
				</div>
			</div>
			<!-- Begin Right Column -->
                <div class="col-sm-12 col-md-4 col-lg-3 rightsidebar">
                <?php include( TEMPLATEPATH . '/sidebar.php' ); ?>
                </div>		
    </div>
    </div>
    </div>
    <!-- End Main Body -->
  </div>
</div>

<?php get_footer(); ?>
