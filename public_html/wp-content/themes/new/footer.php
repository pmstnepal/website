<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
global $pn_options;
?>
<footer class="footerSection" role="footer">
    <div class="container">
        <div class="footer-bodyWrap">
            <div class="row">
            	<div class="col-sm-12">
                    <div class="col-sm-3 foot-col">
                        <h4>Team Pmst Nepal</h4>
                        <ul class="up-teamlist">
                            <li>
                                <dl class="dl-horizontal up-footList">
                                    <dd>Pema Man Singh Tamang</dd>
                                    <dd>Sagun Lama</dd>
                                    <dd>Er Pasang Rumba</dd>
                                    <dd>Mahesh Shakya</dd>
                                    <dd>Max Awaley</dd>
                                </dl>
                                <dl class="dl-horizontal up-footList">
                                    <dd>Uman Waiba</dd>
                                    <dd>Dharma Bajra Lama</dd>
                                    <dd>Shristi Thapa Magar</dd>
                                    <dd>Sameer Lama</dd>
                                </dl>
                            </li>
                           
                        </ul>
                    </div>
                    <div class="col-sm-6 foot-col hidden-xs">
                        <h4>Quick Links</h4>
                        <ul class="up-teamlist foot-links">
                        <?php wp_nav_menu(array('theme_location' => 'footer', 'items_wrap' => '%3$s', 'container' => '')); ?>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                <div class="foot-col">
                    <h4>Address</h4>
                    <ul class="up-teamlist">
                        <li>
                            <strong style="display:block"><?php echo $pn_options['site-main-title']; ?></strong>
                            <strong style="display:block"><?php echo $pn_options['primary-address-line-1']; ?></strong>
                            <p><span class="kd-icons"><i class="fa fa-phone-square" aria-hidden="true"></i></span><?php echo $pn_options['primary-phone-no']; ?>
                            </p>
                            <h5>Email:</h5>
                            <p><a href="mailto:<?php echo $pn_options['primary-email']; ?>"><?php echo $pn_options['primary-email']; ?></a></p>
                            <p><a href="mailto:info@pmstnepal.com">info@pmstnepal.com</a></p>
                            <p>Facebook ID:<a href="<?php echo $pn_options['social-link-facebook']; ?>" target="_blank"><?php echo $pn_options['social-link-facebook']; ?></a></p>
                        </li>
                    </ul>
                </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-info">
        <div class="container">
            <div class="row">
                <div class="col-sm-2"><a href="#"><img
                                src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/pmst-logo.png"
                                class="img-responsive"></a></div>
                <div class="col-sm-4">
                    <ul class="footSocial-links clearfix">
                        <li><a href="<?php echo $pn_options['social-link-facebook']; ?>" target="_blank"><span class="kd-icons"><i class="fa fa-facebook"></i></span>Facebook</a></li>
                        <li><a href="<?php echo $pn_options['social-link-twitter']; ?>" target="_blank"><span class="kd-icons"><i class="fa fa-twitter"></i></span>Twitter</a></li>
                        <li><a href="<?php echo $pn_options['social-link-youtube']; ?>" target="_blank"><span class="kd-icons"><i class="fa fa-youtube-play"></i></span>Youtube</a></li>
                    </ul>
                </div>
                <div class="col-sm-6">
                    <div class="ft-info">
                        <p>Copyright ©2013-2021 <?php echo get_bloginfo( 'name' ); ?>. All rights reserved.</p>
                        <div>Website by: <a href="http://www.pmstnepal.com" target="_blank">PMST Nepal</a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</footer>
<a href="#0" class="cd-top">Top</a>
<?php wp_footer(); ?>
</body>
</html>
