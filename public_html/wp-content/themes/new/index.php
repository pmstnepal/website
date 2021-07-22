<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
global $pn_options;
get_header(); ?>
<div class="siteWrapper">
    <div class="bodyWrapper container">
        <div class="drawer-overlay">
            <div class="main-container">
                 <!-------Start: Breaking News Section------>
    <?php
    if ($pn_options['breaking-section-post-id']!="") {
		 ?>
                  <div class="row-section">
                <div class="dailyFlashNews-post clearfix">
                    <h3 class="extraBigposttitle-extended"><a href="<?php echo get_the_permalink($pn_options['breaking-section-post-id']); ?>"></a><?php if ($pn_options['short-text'] != "") { ?><small class="subTitle-text"><?php echo $pn_options['short-text']; ?></small><?php } ?></h1>
                    <?php if ($pn_options['video-iframe'] != "") { ?>
                        <div class="text-center"><span><?php echo $pn_options['video-iframe']; ?></span></div>
                    <?php } ?>
                </div>
            </div>
    <?php } ?> 
    <!-------End: Breaking News Section------>
        



<!--END: SECOND FULL WIDTH AD SECTION<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
            <!--START: Video SECTION>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
            <div class="pmst-leadPanel row-section row">
                <div class="col-sm-9">
                <div class="nws-post-category">
                    <div class="samachar-tab-list">
                    <div class="row">
                    <div class="col-sm-3">
                    <ul id="myTab" role="tablist" class="state-news-list">
                    <li role="presentation" class="active"><a href="#popular-video" aria-controls="customer" role="tab" data-toggle="tab">Popular Videos</a></li>
                    <?php 
					$a=1;
					foreach($pn_options['tabvideo-section-post-id'] as $term_id) { 
					$term = get_term( $term_id, 'type' );
					$slug = $term->slug;
					?>
                    <li role="presentation"><a href="#<?php echo $slug; ?>" aria-controls="customer" role="tab" data-toggle="tab"><?php echo $term->name; ?></a></li> 
                    <?php 
					$a++;
					} ?>
                    </ul>
                    <!-- Tab panes-->
                   <div class="long-vertical-ad">
					
                    </div>
                    </div>
                    <div class="col-sm-9">
                     <div class="tab-content">
                     <div id="popular-video" role="tabpanel" class="tab-pane  active ">
                            <?php
								$custom = get_post_custom($pn_options['popular-section-post-id'][0]);
								$excerpt=get_the_excerpt($pn_options['popular-section-post-id'][0]);
								preg_match('#^(?:https?://)?(?:www\.)?(?:youtu\.be/|youtube\.com)([\w-]{11})(?:.+)?$#x', $excerpt, $matches);
								$id = $matches[1];
							?>
                            <div class="entertain-flashNwsBox">
                            <div class="entertain-post-content post-item state-item space-bottom">
                            <div class="state-img">
                           <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $id; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                            </div>
                            <div class="postHeading">
                            <h1 class="posttitle text-center">
                            <a href="<?php echo get_the_permalink($pn_options['popular-section-post-id'][0]); ?>"><?php echo get_the_title($pn_options['popular-section-post-id'][0]); ?></a>
                            </h1>
                            </div>
                                                      
                            </div>
                            </div>
                            
                            <div class="row">
                            <?php for($p=1; $p<=2; $p++) { ?>
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                       <div class="post-item">
                                          <div class="pmst-thumb">
                                        <?php
                                        $fimage = wp_get_attachment_image_src(get_post_thumbnail_id($pn_options['popular-section-post-id'][$p]), 'large');
                                        $alt=gia(get_post_thumbnail_id($pn_options['popular-section-post-id'][$p]));
                                        if ($fimage['0']!="") { ?>
                                        <div class="post-thumb">
                                        <img src="<?php echo $fimage['0']; ?>" class="img-responsive" title="<?php echo $alt['title']; ?>" caption="<?php echo $alt['caption']; ?>">                         
                                        </div>
                                        <?php } ?>
                                        <h4 class="ps-postTitle text-center">
                                       <a href="<?php echo get_the_permalink($pn_options['popular-section-post-id'][$p]); ?>"><?php echo get_the_title($pn_options['popular-section-post-id'][$p]); ?></a>
                                        </h4>
                                        </div>
                                        </div>
                                        </div>
                            <?php } ?>
                            </div>
                        </div>
                        
							<?php 
                            $b=1;
                            foreach($pn_options['tabvideo-section-post-id'] as $term_id) { 
							$term = get_term( $term_id, 'type' );
							$slug = $term->slug;
							?>
                            	
                            	<div id="<?php echo $slug; ?>" role="tabpanel" class="tab-pane">
										<?php
                                        $videos = new WP_Query( array(
										'post_type' => 'video',
										'tax_query' => array(
													array (
													'taxonomy' => 'type',
													'field' => 'term_id',
													'terms' => $term_id,
													)
												),
										'offset' => '0',
										'posts_per_page' => 1,
										'orderby' => 'date',
										'order' => 'desc'
										) );
                                        while ($videos->have_posts()) : $videos->the_post();
                                        $custom = get_post_custom($post->ID);
										$excerpt=get_the_excerpt($post->ID);
										preg_match('#^(?:https?://)?(?:www\.)?(?:youtu\.be/|youtube\.com)([\w-]{11})(?:.+)?$#x', $excerpt, $matches);
    									$id = $matches[1];
                                        ?>
                                        <div class="entertain-flashNwsBox">
                                        <div class="entertain-post-content post-item state-item space-bottom">
                                        <div class="state-img">
                                        <iframe width="100%" height="315" src="https://www.youtube.com/embed/<?php echo $id; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        </div>
                                        <div class="postHeading">
                                        <h1 class="posttitle text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                        </div>
                                        
                                        </div>
                                        </div>
										<?php 
                                        endwhile; 
										wp_reset_query();
										?>
                                    	<div class="row">
                                        <?php
										$videos2 = new WP_Query( array(
										'post_type' => 'video',
										'tax_query' => array(
													array (
													'taxonomy' => 'type',
													'field' => 'term_id',
													'terms' => $term_id,
													)
												),
										'offset' => '1',
										'posts_per_page' => 2,
										'orderby' => 'date',
										'order' => 'desc'
										) );
                                        while ($videos2->have_posts()) : $videos2->the_post();
										?>
                                        <div class="col-xs-12 col-sm-6 col-md-6">
                                        <div class="post-item">
                                          <div class="pmst-thumb">
                                        <?php
                                        $fimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
                                        $alt=gia(get_post_thumbnail_id($post->ID));
                                        if ($fimage['0']!="") { ?>
                                        <div class="post-thumb">
                                        <img src="<?php echo $fimage['0']; ?>" class="img-responsive" title="<?php echo $alt['title']; ?>" caption="<?php echo $alt['caption']; ?>">                         
                                        </div>
                                        <?php } ?>
                                        <h4 class="ps-postTitle text-center">
                                       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        </div>
                                        </div>
                                        </div>
                                        <?php 
                                        endwhile; 
										wp_reset_query();
										?>
                                    </div>
                                </div>
                            <?php 
                            $b++;
                            } ?>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!--End: pradesh samachar section-->

        <!--Start: First Sidebar Ad Section-->
        <div class="col-sm-12 col-md-4 col-lg-3">
            <div class="adv-row advertisement-primary">
                <div class="rightTop-AddFlash">
                      <div class="staticAdd"> 
                          
								<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
        </div>
    </div>

<!--START: SECOND FULL WIDTH AD SECTION>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
<?php
    if (isset($pn_options['full-add-1-section-id'])  && $pn_options['full-add-1-section-id']!="") {
    ?>
			    <div class="full-adv-row adv-flexi bodyTopAdd">

			<?php
            $post = get_post($pn_options['full-add-1-section-id']);
            if (setup_postdata($post)) {
            $image = wp_get_attachment_image_src(simple_fields_value('image'), 'full');
            $alt= gia(simple_fields_value('image'));
            
            ?>
            <a href="<?php echo simple_fields_value('link'); ?>" class="padding10"  target="_blank">
            <img src="<?php echo $image['0']; ?>" title="<?php echo $alt['title']; ?>" alt="<?php echo $alt['alt']; ?>" class="img-responsive">
            </a>
            <?php } ?>
    </div>
 	<?php }  else { ?>
					<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
                            <?php } ?>
   
    


<!--START: Photo Featured>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
<div class="row-section row height-fixer-2">
        <div class="col-sm-12 col-md-8 col-lg-9">
         	<div class="news-post-content">
            	<div class="row height-fixer">
                	<div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="postName"><span>Photo Featured</span><a href="<?php bloginfo('siteurl'); ?>/type/photo-gallery/" class="view-all">View All</a></div>
            <div class="combo-extra-sec">
						<?php
                        $args = array(
                        'post_type' => 'gallery',
                        'type' => 'photo-feature',
                        'orderby' => 'date',
                        'order' => 'desc',
                        'numberposts' => '3'
                        );
                        
                        $fpackages = get_posts($args);
                        foreach( $fpackages as $post ) :	setup_postdata($post);
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
                        $custom = get_post_custom($post->ID);
                        ?>
                            <div class="entertain-flashNwsBox">
                            <div class="postHeading">
                                <h2 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <div class="entertain-post-content post-item">
                                <div class="pmst-thumb">
                                           <a href="<?php the_permalink(); ?>">
                                    <?php
                                        $fimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                        $alt=gia(get_post_thumbnail_id($post->ID));
                                        if ($fimage['0']!="") { ?>
                                        <div class="post-thumb">
                                        <img src="<?php echo $fimage['0']; ?>" class="img-responsive" title="<?php echo $alt['title']; ?>" caption="<?php echo $alt['caption']; ?>">                         
                                        </div>
                                        <?php } ?>
                                    </a>                                       
                                   </div>
                            </div>
                        </div>
                            <?php endforeach; 
							wp_reset_postdata();
							?>
                            
                            </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-8 pad-left-0">
                     <div class="news-post-large">
                     <div class="postName"><span>Featured Models</span><a href="<?php bloginfo('siteurl'); ?>/type/Models/" class="view-all">View More</a></div>
							 <?php
                                $args = array(
                                'post_type' => 'gallery',
                                'type' => 'Models',
                                'orderby' => 'date',
                                'order' => 'desc',
                                'numberposts' => '1',
                                'offset'=>'0'
                                );
                                $featuredmodels = get_posts($args);
                                foreach( $featuredmodels as $post ) :	setup_postdata($post);
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
                                $custom = get_post_custom($post->ID);
                                ?>
                                <div class="post-small-single">
                                        <div class="post-thumb thumb-round">
                                            <a href="<?php the_permalink(); ?>">
                                            <?php
                                                $fimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
                                                $alt=gia(get_post_thumbnail_id($post->ID));
                                                if ($fimage['0']!="") { ?>
                                                <div class="post-thumb">
                                                <img src="<?php echo get_bloginfo('template_directory'); ?>/inc/timthumb.php?src=<?php echo $fimage['0']; ?>&w=558&h=338" class="img-responsive" title="<?php echo $alt['title']; ?>" caption="<?php echo $alt['caption']; ?>">                         
                                                </div>
                                                <?php } ?>
                                            </a>
                                            </div>
                                            <h1 class="ps-postTitle post-title-main text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                                            </div>
                                <?php endforeach; 
                                wp_reset_postdata();
                                ?>
                        	
                                </div>
                                <div class="row">
                                <?php
                                $args = array(
                                'post_type' => 'gallery',
                                'type' => 'Models',
                                'orderby' => 'date',
                                'order' => 'desc',
                                'numberposts' => '1',
                                'offset'=>'1'
                                );
                                $featuredmodels2 = get_posts($args);
                                foreach( $featuredmodels2 as $post ) :	setup_postdata($post);
                                $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
                                $custom = get_post_custom($post->ID);
                                ?>
                                <div class="col-xs-12 col-sm-5 col-md-5">
                                <div class="post-item">
                                 <div class="pmst-thumb">
                               <a href="<?php the_permalink(); ?>">
                                            <?php
                                                $fimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
                                                $alt=gia(get_post_thumbnail_id($post->ID));
                                                if ($fimage['0']!="") { ?>
                                                <div class="post-thumb">
                                                <img src="<?php echo $fimage['0']; ?>" class="img-responsive" title="<?php echo $alt['title']; ?>" caption="<?php echo $alt['caption']; ?>">                         
                                                </div>
                                                <?php } ?>
                                            </a>
                                </div>
                                <h3 class="ps-postTitle text-center">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                </div>
                                </div>
                                <?php endforeach; 
                                wp_reset_postdata();
                                ?>
                                <div class="col-xs-12 col-sm-7 col-md-7">
                                    <div class="post-small-list">
										<?php
                                        $args = array(
                                        'post_type' => 'gallery',
                                        'type' => 'Models',
                                        'orderby' => 'date',
                                        'order' => 'desc',
                                        'numberposts' => '3',
                                        'offset'=>'2'
                                        );
                                        $featuredmodels3 = get_posts($args);
                                        foreach( $featuredmodels3 as $post ) :	setup_postdata($post);
                                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
                                        $custom = get_post_custom($post->ID);
                                        ?>
                                        <div class="pmst-nws-post">
                                        <div class="post-item">
                                        <div class="ps-imgBox smallImg">
                                          <a href="<?php the_permalink(); ?>">
                                            <?php
                                                $fimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
                                                $alt=gia(get_post_thumbnail_id($post->ID));
                                                if ($fimage['0']!="") { ?>
                                                <div class="post-thumb">
                                                <img src="<?php echo get_bloginfo('template_directory'); ?>/inc/timthumb.php?src=<?php echo $fimage['0']; ?>&w=60&h=60" class="img-responsive" title="<?php echo $alt['title']; ?>" caption="<?php echo $alt['caption']; ?>">                         
                                                </div>
                                                <?php } ?>
                                            </a>
                                        </div>
                                        </div>
                                        <div class="post-desc-text">
                                        <h4 class="ps-postTitle">
                                       <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        </div>
                                        </div>
										<?php endforeach; 
                                        wp_reset_postdata();
                                        ?>
                                    </div>
                                </div>
                            </div>
                    </div>
                    
                </div>
            </div>   
        </div>

        <!--Start: Interview Section-->
        <div class="col-sm-3">
            <div class="nws-post-category bicharhomepage">
				<?php 
                $term = get_term( '183', 'type' );
                $slug = $term->slug;
                ?>
                <div class="postName"><span>Interview</span><a href="<?php echo get_term_link($slug, 'type'); ?>" class="view-all">View All</a>
                </div>

                <!----------------- catagorize news post --------------------->
						<?php
                        $interviews = new WP_Query( array(
                        'post_type' => 'video',
                        'tax_query' => array(
							array (
							'taxonomy' => 'type',
							'field' => 'term_id',
							'terms' =>'183',
							)
							),
                        'numberposts' => 3,
                        'orderby' => 'date',
                        'order' => 'desc'
                        ) );
                        while ($interviews->have_posts()) : $interviews->the_post();
                        ?>
               
                                                 <div class="entertain-flashNwsBox">
                            <div class="postHeading">
                                <h2 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <div class="entertain-post-content post-item">
                                <div class="pmst-thumb">
                                           <a href="<?php the_permalink(); ?>">
                                    <?php
                                        $fimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                        $alt=gia(get_post_thumbnail_id($post->ID));
                                        if ($fimage['0']!="") { ?>
                                        <div class="post-thumb">
                                        <img src="<?php echo $fimage['0']; ?>" class="img-responsive" title="<?php echo $alt['title']; ?>" caption="<?php echo $alt['caption']; ?>">                         
                                        </div>
                                        <?php } ?>
                                    </a>                                       
                                   </div>
                                  <p><?php echo wp_trim_words( get_the_content(), 15, '...' ); ?></p>
                            </div>
                        </div>
                        <?php endwhile; 
						wp_reset_query();
						?>
            </div>
        </div>
    </div>
<!--END: Featured Models <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<-->
<?php
    if (isset($pn_options['full-add-2-section-id']) && $pn_options['full-add-2-section-id']!="") {
    ?>
			<div class="full-adv-row adv-flexi bodyTopAdd">
			<?php
            $post = get_post($pn_options['full-add-2-section-id']);
            if (setup_postdata($post)) {
            $image = wp_get_attachment_image_src(simple_fields_value('image'), 'full');
            $alt= gia(simple_fields_value('image'));
            
            ?>
            <a href="<?php echo simple_fields_value('link'); ?>" class="padding10"  target="_blank">
            <img src="<?php echo $image['0']; ?>" title="<?php echo $alt['title']; ?>" alt="<?php echo $alt['alt']; ?>" class="img-responsive">
            </a>
            <?php } ?>
    </div>
 	<?php }  else { ?>
							<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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

                            <?php } ?>
                            
<!--START: News & Gossips SECTION>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
<div class="row-section row height-fixer-3">
		<!--Start: News & Gossips Section-->
        <div class="col-sm-5">
            <div class="nws-post-category">
                <div class="postName"><span>News & Gossips</span><a href="<?php bloginfo('siteurl'); ?>/category/articles-and-gossip/" class="view-all">View All</a></div>
                    <div class="postbox-content entertain-post">
						<?php
                        $args = array(
                        'post_type' => 'post',
                        'cat' => 165,
                        'orderby' => 'date',
                        'order' => 'desc',
                        'numberposts' => '1',
                        'offset' =>'0'
                        );
                        $otherarticles = get_posts($args);
                        foreach( $otherarticles as $post ) :	setup_postdata($post);
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'large' );
                        $custom = get_post_custom($post->ID);
                        ?>
                        <div class="entertain-flashNwsBox">
                            <div class="postHeading">
                                <h2 class="posttitle"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                            </div>
                            <div class="entertain-post-content post-item">
                                <div class="pmst-thumb">
                                           <a href="<?php the_permalink(); ?>">
                                    <?php
                                        $fimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                                        $alt=gia(get_post_thumbnail_id($post->ID));
                                        if ($fimage['0']!="") { ?>
                                        <div class="post-thumb">
                                        <img src="<?php echo $fimage['0']; ?>" class="img-responsive" title="<?php echo $alt['title']; ?>" caption="<?php echo $alt['caption']; ?>">                         
                                        </div>
                                        <?php } ?>
                                    </a>                                       
                                   </div>
                                  <p><?php echo wp_trim_words( get_the_content(), 35, '...' ); ?></p>
                            </div>
                        </div>
                        <?php endforeach; 
						wp_reset_postdata();
						?>
                        
                    </div>
                </div>
                            
                            
<?php
    if (isset($pn_options['medium-add-section-id']) && $pn_options['medium-add-section-id']!="") {
    ?>
			<div class="ad-half-middle rang-tarang-ad">
			<?php
            $post = get_post($pn_options['medium-add-section-id']);
            if (setup_postdata($post)) {
            $image = wp_get_attachment_image_src(simple_fields_value('image'), 'full');
            $alt= gia(simple_fields_value('image'));
            
            ?>
            <a href="<?php echo simple_fields_value('link'); ?>" target="_blank">
            <img src="<?php echo $image['0']; ?>" title="<?php echo $alt['title']; ?>" alt="<?php echo $alt['alt']; ?>" class="img-responsive" style="height: 130px;width:100%;">
            </a>
            <?php } ?>
    </div>
 	<?php }  else { ?>
								<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
                            <?php } ?>
                                        
        </div>
        <!--End: News & Gossips Section-->
        
        <div class="col-sm-7">
        <div class="row">
        <!--Start: 1st Chance Section-->
        <div class="col-sm-6">
            <div class="box-mobile-spacer">
                    <div class="postName"><span>1st Chance</span><a href="<?php bloginfo('siteurl'); ?>/1st-chance" class="view-all">More</a></div>
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
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/inc/timthumb.php?src=<?php echo $fimage['0']; ?>&w=150&h=150" class="img-responsive" title="<?php echo $alt['title']; ?>" caption="<?php echo $alt['caption']; ?>">                         
                                        </div>
                                        <?php } ?>
                                    </a>  
                                    </div>
                                    <div class="col-xs-7 col-sm-8 col-md-8">
                                    	<h3 class="pmst-posttitle"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                         <p><?php echo substr(strip_tags($post->post_content), 0, 44);?></p>
                                    </div>
                                    
                                                                           
                                    </div>
                             <?php endwhile; ?>
                                   
                           </div>
        			</div>
        </div>
        <!--End: 1st Chance Section-->
        
		<?php
        $args = array(
        'post_type' => 'post',
        'cat' => 182,
        'orderby' => 'date',
        'order' => 'desc',
        'numberposts' => '6',
        'offset' =>'0'
        );
        $otherarticles = get_posts($args);
        if(count($otherarticles)>0):
        ?>
        <!--Start: Trending Nepal Section-->
        <div class="col-sm-6">
        	<div class="postName"><span>Trending Nepal</span><a href="<?php echo pmstnepal_get_cat_slug(182); ?>" class="view-all">View All</a></div>
            <div class="combo-extra-sec">
						<?php
                        foreach( $otherarticles as $post ) : setup_postdata($post);
                        $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
                        $custom = get_post_custom($post->ID);
                        ?>
                        	<div class="row pm-posts-small">
                                    <div class="col-xs-5 col-sm-4 col-md-4">
                                    	<?php
                                $fimage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'medium');
                                $alt=gia(get_post_thumbnail_id($post->ID));
                                if ($fimage['0']!="") { ?>
                                 <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/inc/timthumb.php?src=<?php echo $fimage['0']; ?>&w=150&h=150" class="img-responsive" title="<?php echo $alt['title']; ?>" caption="<?php echo $alt['caption']; ?>">                         
                                </a>
                                <?php } ?>

                                    </div>
                                    <div class="col-xs-7 col-sm-8 col-md-8">
                                    	<h3 class="pmst-posttitle"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php echo substr(get_the_title(),0,30); ?></a></h3>
                                        <p><?php echo wp_trim_words( get_the_content(), 5, '...' ); ?></p>
                                    </div>
                            </div>
                           
                        <?php endforeach; wp_reset_postdata(); ?>
             </div>
        </div>
        <!--End: Trending Nepal Section--> 
        <?php endif; ?>
		</div>
        </div>
    </div>

<!--START: SECOND FULL WIDTH AD SECTION>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>-->
<?php
    if (isset($pn_options['full-add-3-section-id']) && $pn_options['full-add-3-section-id']!="") {
    ?>
			<div class="full-adv-row adv-flexi bodyTopAdd">
			<?php
            $post = get_post($pn_options['full-add-3-section-id']);
            if (setup_postdata($post)) {
            $image = wp_get_attachment_image_src(simple_fields_value('image'), 'full');
            $alt= gia(simple_fields_value('image'));
            
            ?>
            <a href="<?php echo simple_fields_value('link'); ?>" class="padding10"  target="_blank">
            <img src="<?php echo $image['0']; ?>" title="<?php echo $alt['title']; ?>" alt="<?php echo $alt['alt']; ?>" class="img-responsive">
            </a>
            <?php } ?>
    </div>
 	<?php }  else { ?>
						<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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

                            <?php } ?>


</div>
</div>
</div>
</div>
<?php get_footer(); ?>