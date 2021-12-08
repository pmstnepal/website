<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 ?>
                                <div class="box-mobile-spacer">
<script async src="https://cse.google.com/cse.js?cx=19dd73c9e91e54353"></script>
<div class="gcse-search"></div>
                                        <div class="postName">
<span>1st Chance</span><a href="<?php site_url(); ?>/1st-chance" class="view-all">More</a></div>
                                        <div class="combo-extra-sec">
                                                <?php
                                                global $wp_query;
                                                $args = array( 'post_type' => '1st_chance',  'posts_per_page' => 6, 'orderby' => 'date', 'order' => 'DESC' );
                                                query_posts($args);
                                                while (have_posts()) : the_post();
                                                ?>
                                                        <div class="row pm-posts-small">
                                                        <div class="col-xs-5 col-sm-4 col-md-4">
                                                        <a href="<?php the_permalink(); ?>">
                                                        <?php
                                                            $fimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
                                                            $alt=gia(get_post_thumbnail_id($post->ID));
                                                            if ($fimage['0']!="") { ?>
                                                            <div class="post-thumb">
                                                            <img src="<?php echo $fimage['0']; ?>" class="img-responsive" title="<?php echo $alt['title']; ?>" caption="<?php echo $alt['caption']; ?>">                         
                                                            </div>
                                                            <?php } ?>
                                                        </a>  
                                                        </div>
                                                        <div class="col-xs-7 col-sm-8 col-md-8">
                                                            <h3 class="pmst-posttitle"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                                             <p><?php echo substr(strip_tags($post->post_content), 0, 20);?></p>
                                                        </div>
                                                        
                                                                                               
                                                        </div>
                                                 <?php endwhile; ?>
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
 

                        	<?php
                            if (isset($pn_options['side-add-2-section-id'])) {
                            ?>
                            <?php
							foreach($pn_options['side-add-2-section-id'] as $post_id) {
                            $post = get_post($post_id);
                            if (setup_postdata($post)) {
                            $image = wp_get_attachment_image_src(simple_fields_value('image'), 'full');
                            $alt= gia(simple_fields_value('image'));
                            ?>


                            <div style="margin-top:20px !important">
                            <a href="<?php echo simple_fields_value('link'); ?>" class="padding10"  target="_blank">
                            <img src="<?php echo $image['0']; ?>" title="<?php echo $alt['title']; ?>" alt="<?php echo $alt['alt']; ?>" class="img-responsive">
                            </a>


                            </div>
                            <?php } ?>
                            <?php } 
                            ?>

                             <?php }  ?>
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

