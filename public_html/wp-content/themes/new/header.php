<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Sindhupalchok Express
/**
 * START THE SESSION IF NOT ALREADY STARTED
 */
global $pn_options;
?>
<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="robots" content="index,follow,noodp" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta property="fb:app_id" content="177873689551703"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="Copyright" content="Copyright pmstnepal.com">
<meta name="author" content="www.pmstnepal.com - Nepal's No.1 news portal - news & views"/>
<!-- Icons -->   
<?php if(isset($pn_options['site-favicon']['thumbnail'])) { ?>
<link rel="shortcut icon" href="<?php echo $pn_options['site-favicon']['thumbnail']; ?>">
<link rel="apple-touch-icon" href="<?php echo $pn_options['site-favicon']['thumbnail']; ?>">
<?php } ?>
<link rel="alternate" type="application/rss+xml" title="PMSTNEPAL - Nepal Filming, Film, TV, TVC, Drama, Documentary, Magazine, Ads, Photography, Location Hunt, Recce, Production and Research coordinator in Nepal. &raquo; Feed" href="<?php echo esc_url( home_url( '/feed/' ) ); ?>" />
<?php wp_head(); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script src="//platform-api.sharethis.com/js/sharethis.js#property=5b24de6fd4efc40011702dfb&product=inline-share-buttons"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78731505-1', 'auto');
  ga('send', 'pageview');
  
  
</script>

<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5wTqgRtDX1odFSiBl52bNcfpGx3d1pCZ";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
<script data-ad-client="ca-pub-8768534328781288" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>

   
</head>
<body class="home blog drawer drawer-left drawer-navbar drawer-static" >
<header role="header" class="up-header-panel">
    <!--Top Most AD Section -->
        <!--End Top Most AD Section -->
    <!--Top Social Links and Date Bar -->
    <div class="sitetop-Pres">
    <div class="container">
    	<div class="row">
        <div class="col-xs-12 hidden-xs col-sm-6 offset-padd-0">
            <div class="social-head left">
                <div class="social">
                    <div class="social-links">
                    <script src="https://apis.google.com/js/platform.js"></script>
           				<div class="g-ytsubscribe" data-channel="pemamansinghtamang" data-layout="default" data-count="default" style="height:10px"></div>    
						<div class="fb-like" data-href="https://www.facebook.com/pmstnepal/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 offset-padd-0">
            <div class="search-wrap">
                <form method="get" id="searchform" action="http://www.khabardabali.com/">
                    <input type="text" class="text" name="s" id="s" value=""
                           onfocus="if(this.value==this.defaultValue)this.value='';"
                           onblur="if(this.value=='')this.value=this.defaultValue;" maxlength="150"
                           placeholder="Search..."/>
                    <input type="submit" id="searchsubmit" value="" class="button search-icon"/>
                </form>
            </div>
            <div class="date"><span><?= EngToNep::convertTime(time(), false); ?></span>&nbsp;&nbsp;/&nbsp;&nbsp;<span><b><?php echo date('F jS, Y') ?></b></span>
            </div>
        </div>
        </div>
        </div>
    </div>
    <!--End Top Social Links and Date Bar -->

    <!--Logo and Ad Header Section -->
    <div class="pmst-topHead-panel container">
        <!--Logo Section -->
        <div class="pmst-logoPanel">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo $pn_options['site-logo']['url']; ?>" alt="PMSTNEPAL Logo">
            </a>
        </div>
        <!--End Logo Section -->

        <!--AD Section on Right side of Logo -->
		<?php
        if (isset($pn_options['top-header-add-section-id'])) {
        ?>
        <?php
        $post = get_post($pn_options['top-header-add-section-id']);
        if (setup_postdata($post)) {
        $image = wp_get_attachment_image_src(simple_fields_value('image'), 'full');
        $alt= gia(simple_fields_value('image'));
        
        ?> 
        <div class="pmst-topAdd hidden-xs">
        <a href="<?php echo simple_fields_value('link'); ?>" class="top-half-ad" target="_blank">
        <img src="<?php echo $image['0']; ?>" title="<?php echo $alt['title']; ?>" alt="<?php echo $alt['alt']; ?>" class="img-responsive">
        </a>
        </div>
        <?php } ?>
        <?php } ?>
        <!--End AD Section on Right side of Logo -->
    </div>
    <!--End Logo and Ad Header Section -->
    <!------------------------------------ Small device hamburger ---------------------------------->
    <div class="drawer-header">
        <button type="button" class="drawer-toggle drawer-hamburger"><span class="sr-only">toggle navigation</span>
        <span class="drawer-hamburger-icon"></span></button>
    </div>
    <!------------------------------------ Main menu starts ---------------------------------->
    <div class="drawer-main drawer-navbar-default menuAccess">
    <div class="container">
    
    <nav class="drawer-nav" role="navigation">
        <ul class="drawer-menu">
            <li class="small-deviceOnlyMenu-hd">
            <div class="mobileMenu-Head">Main menu</div>
            </li>
            <li class="drawer-menu-item dropdown active">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            </li>
            <?php wp_nav_menu_top( array( 'theme_location' => 'mainmenu','items_wrap' =>'%3$s','container'=>'') );?>
        </ul>
    <div class="drawer-footer"><span></span></div>
    </nav>
    </div>
    </div>
    <!-- /.drawer-main -->
</header>