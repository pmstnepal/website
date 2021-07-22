<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
 ?>
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
                            <a href="<?php echo simple_fields_value('link'); ?>" class="padding10"  target="_blank">
                            <img src="<?php echo $image['0']; ?>" title="<?php echo $alt['title']; ?>" alt="<?php echo $alt['alt']; ?>" class="img-responsive">
                            </a>
                            <?php } ?>
                            <?php } 
                            ?>
                    <?php }  else { ?>
						<font>Sidebar left</font>
						<br>

                            <?php } ?>
 
 
 
							 <?php
                            if (isset($pn_options['side-add-1-section-id']) && $pn_options['side-add-1-section-id']!="") {
                            ?>
                            <div style="margin-top:10px;">
                            <?php
                            $post = get_post($pn_options['side-add-1-section-id']);
                            if (setup_postdata($post)) {
                            $image = wp_get_attachment_image_src(simple_fields_value('image'), 'full');
                            $alt= gia(simple_fields_value('image'));
                            
                            ?>
                            <a href="<?php echo simple_fields_value('link'); ?>" class="padding10"  target="_blank">
                            <img src="<?php echo $image['0']; ?>" title="<?php echo $alt['title']; ?>" alt="<?php echo $alt['alt']; ?>" class="img-responsive">
                            </a>
                            <?php } ?>
                            </div>
                            <?php } ?>
                            
								
                                
								ADD SPACE
                                
                                 <!-- Composite Start -->
                                <div id="M366809ScriptRootC280764">
                                <div id="M366809PreloadC280764">
                                Loading...    </div>
                                <script>
                                (function(){
                                var D=new Date(),d=document,b='body',ce='createElement',ac='appendChild',st='style',ds='display',n='none',gi='getElementById',lp=d.location.protocol,wp=lp.indexOf('http')==0?lp:'https:';
                                var i=d[ce]('iframe');i[st][ds]=n;d[gi]("M366809ScriptRootC280764")[ac](i);try{var iw=i.contentWindow.document;iw.open();iw.writeln("<ht"+"ml><bo"+"dy></bo"+"dy></ht"+"ml>");iw.close();var c=iw[b];}
                                catch(e){var iw=d;var c=d[gi]("M366809ScriptRootC280764");}var dv=iw[ce]('div');dv.id="MG_ID";dv[st][ds]=n;dv.innerHTML=280764;c[ac](dv);
                                var s=iw[ce]('script');s.async='async';s.defer='defer';s.charset='utf-8';s.src=wp+"//jsc.mgid.com/p/m/pmstnepal.com.280764.js?t="+D.getYear()+D.getMonth()+D.getUTCDate()+D.getUTCHours();c[ac](s);})();
                                </script>
                                </div>
                                <!-- Composite End -->
								ADD SPACE

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
