<?php
/*
Plugin Name: WP Top 5 Social Sharing
Plugin URI: http://www.a1netsolutions.com/Products/WP-Top-5-Social-Sharing
Description: <strong>WP Top 5 Social Sharing</strong> is a easy to use and flexible WordPress plugin. This plugin add a floating icon set for sharing your blog posts, pages, attachments etc on top 5 social media (Facebook, Twitter, Google Plus, LinkedIn & Digg).
Version: 3.0
Author: Ahsanul Kabir
Author URI: http://www.ahsanulkabir.com/
License: GPL2
License URI: license.txt
*/

$wpt5ss_conf = array(
	'VERSION' => get_bloginfo('version'),
	'VEWPATH' => plugins_url('lib/', __FILE__),
);

$wpt5ss_array = array(
	'facebook'=>'Facebook',
	'twitter'=>'Twitter',
	'google'=>'Google+',
	'linkedin'=>'LinkedIn',
	'digg'=>'Digg'
);

function wpt5ss_admin_styles_script()
{
	global $wpt5ss_conf;
	wp_enqueue_style('wpt5ss_admin_styles',($wpt5ss_conf["VEWPATH"].'css/admin.css'));
	if( $wpt5ss_conf["VERSION"] > 3.7 )
	{
		wp_enqueue_style('wpt5ss_icon_styles',($wpt5ss_conf["VEWPATH"].'css/icon.css'));
	}
	wp_enqueue_style( 'wp-color-picker' );
    wp_enqueue_script( 'wpt5ss-admin-script',($wpt5ss_conf["VEWPATH"].'js/admin.js'),array('wp-color-picker'),false,true );
}
add_action('admin_print_styles', 'wpt5ss_admin_styles_script');

function wpt5ss_scripts_styles()
{
	global $wpt5ss_conf;
	wp_enqueue_script('wpt5ss_site_scripts',($wpt5ss_conf["VEWPATH"].'js/site.js'),array('jquery'),'',true);
	wp_enqueue_style('wpt5ss_site_style',($wpt5ss_conf["VEWPATH"].'css/site.css'));
}
add_action('wp_enqueue_scripts', 'wpt5ss_scripts_styles');

function wpt5ss_defaults()
{
	$wpt5ss_default = plugin_dir_path( __FILE__ ).'lib/default.php';
	if(is_file($wpt5ss_default))
	{
		require $wpt5ss_default;
		foreach($default as $k => $v)
		{
			$vold = get_option($k);
			if(!$vold)
			{
				update_option($k, $v);
			}
		}
		if(!is_multisite())
		{
			unlink($wpt5ss_default);
		}
	}
}

function wpt5ss_activate()
{
	wpt5ss_defaults();
}

function wpt5ss_admin_menu()
{
	global $wpt5ss_conf;
	if( $wpt5ss_conf["VERSION"] < 3.8 )
	{
		add_menu_page('WP Top 5 Social Sharing', 'Social Sharing', 'manage_options', 'wpt5ss_admin_page', 'wpt5ss_admin_function', (plugins_url('lib/img/icon.png', __FILE__)));
	}
	else
	{
		add_menu_page('WP Top 5 Social Sharing', 'Social Sharing', 'manage_options', 'wpt5ss_admin_page', 'wpt5ss_admin_function');
	}
}
add_action('admin_menu', 'wpt5ss_admin_menu');

function wpt5ss_select( $iget, $iset, $itxt )
{
	if( $iget == $iset )
	{
		echo '<option value="'.$iset.'" selected="selected">'.$itxt.'</option>';
	}
	else
	{
		echo '<option value="'.$iset.'">'.$itxt.'</option>';
	}
}

function wpt5ss_update($key, $value)
{
	if(isset($value) && !empty($value))
	{
		$value = sanitize_text_field($value);
		update_option($key, $value);
	}
}

function wpt5ss_mkColorFields($wpt5ss_array)
{
	foreach($wpt5ss_array as $k=>$v)
	{
		echo '
		  <div class="row">
            <label>'.$v.' Icon Color: </label>
            <input type="text" class="wpt5ss_colorField" name="wpt5ss_'.$k.'_link_color" value="'.get_option('wpt5ss_'.$k.'_link_color').'" />
          </div>
          <div class="row">
            <label>'.$v.' Icon Hover Color: </label>
            <input type="text" class="wpt5ss_colorField" name="wpt5ss_'.$k.'_hover_color" value="'.get_option('wpt5ss_'.$k.'_hover_color').'" />
          </div>
          <div class="row">
            <label>'.$v.' Button Color: </label>
            <input type="text" class="wpt5ss_colorField" name="wpt5ss_'.$k.'_link_bg" value="'.get_option('wpt5ss_'.$k.'_link_bg').'" />
          </div>
          <div class="row">
            <label>'.$v.' Button Hover Color: </label>
            <input type="text" class="wpt5ss_colorField" name="wpt5ss_'.$k.'_hover_bg" value="'.get_option('wpt5ss_'.$k.'_hover_bg').'" />
          </div>';
	}
}

function wpt5ss_mkCustomCSS($wpt5ss_array)
{
	echo '<style type="text/css">';
	foreach($wpt5ss_array as $k=>$v)
	{
		  $icon_link_color_k = 'wpt5ss_'.$k.'_link_color';
		  $icon_link_color_v = get_option($icon_link_color_k);
		  if($icon_link_color_v)
		  {
			  echo '#wpt5ss .wpt5ss_'.$k.'{color:'.$icon_link_color_v.'}';
		  }
		  
		  $icon_hover_color_k = 'wpt5ss_'.$k.'_hover_color';
		  $icon_hover_color_v = get_option($icon_hover_color_k);
		  if($icon_hover_color_v)
		  {
			  echo '#wpt5ss .wpt5ss_'.$k.':hover{color:'.$icon_hover_color_v.'}';
		  }
		  
          $icon_link_bg_k = 'wpt5ss_'.$k.'_link_bg';
		  $icon_link_bg_v = get_option($icon_link_bg_k);
		  if($icon_link_bg_v)
		  {
			  echo '#wpt5ss .wpt5ss_'.$k.'{background:'.$icon_link_bg_v.'}';
		  }
		  
		  $icon_hover_bg_k = 'wpt5ss_'.$k.'_hover_bg';
		  $icon_hover_bg_v = get_option($icon_hover_bg_k);
		  if($icon_hover_bg_v)
		  {
			  echo '#wpt5ss .wpt5ss_'.$k.':hover{background:'.$icon_hover_bg_v.'}';
		  }
	}
	echo '</style>';
}

function wpt5ss_admin_function()
{
	global $wpt5ss_array;
	if( isset($_POST["wpt5ss_theme"]) || !empty($_POST["wpt5ss_theme"]) )
	{
		foreach($wpt5ss_array as $k=>$v)
		{
			wpt5ss_update('wpt5ss_'.$k.'_link_color', $_POST['wpt5ss_'.$k.'_link_color']);
			wpt5ss_update('wpt5ss_'.$k.'_hover_color', $_POST['wpt5ss_'.$k.'_hover_color']);
			wpt5ss_update('wpt5ss_'.$k.'_link_bg', $_POST['wpt5ss_'.$k.'_link_bg']);
			wpt5ss_update('wpt5ss_'.$k.'_hover_bg', $_POST['wpt5ss_'.$k.'_hover_bg']);
		}
		wpt5ss_update('wpt5ss_theme', $_POST["wpt5ss_theme"]);
		wpt5ss_update('wpt5ss_loc', $_POST["wpt5ss_loc"]);
		
		if($_POST["wpt5ss_zoom"] == 'on')
		{
			wpt5ss_update('wpt5ss_zoom', 'on');
		}
		else
		{
			wpt5ss_update('wpt5ss_zoom', 'off');
		}
		
		if($_POST["wpt5ss_rotate"] == 'on')
		{
			wpt5ss_update('wpt5ss_rotate', 'on');
		}
		else
		{
			wpt5ss_update('wpt5ss_rotate', 'off');
		}
	
		echo '<div id="message" class="updated wpt5ss_updated"><p>Your settings has been successfully saved.</p></div>';
	}
	
	global $wpt5ss_conf;
	echo '<div id="wpt5ss_container">
	<div id="wpt5ss_main">
	<a href="https://www.youtube.com/watch?v=kg48V-EP6DQ" target="_blank"><img src="',$wpt5ss_conf["VEWPATH"],'/img/uvg.png" id="wpt5ss_uvg" /></a>
	<h1 id="wpt5ss_page_title">WP Top 5 Social Sharing</h1>';
	?>
    <div class="wpt5ss_box">
    <div class="wpt5ss_box_title">Settings</div>
    <div class="wpt5ss_box_con">
    <form method="post" action="">
      <div class="row">
        <label>Sticky Position of Icon Set: </label>
        <select name="wpt5ss_loc">
          <?php
            $wpt5ss_loc = get_option( 'wpt5ss_loc' );
            wpt5ss_select( $wpt5ss_loc, 'right', 'Right' );
            wpt5ss_select( $wpt5ss_loc, 'left', 'Left' );
            ?>
        </select>
      </div>
      <div class="row">
        <label>Animation of Buttons: </label>
        <span>
          <?php
          $wpt5ss_zoom = get_option( 'wpt5ss_zoom' );
		  echo '<label><input type="checkbox" name="wpt5ss_zoom" value="on"';
		  if($wpt5ss_zoom=='on')
		  {
			 echo ' checked="checked"';
		  }
		  echo ' />Zoom In</label> &nbsp; &nbsp; &nbsp; ';

          $wpt5ss_rotate = get_option( 'wpt5ss_rotate' );
		  echo '<label><input type="checkbox" name="wpt5ss_rotate" value="on"';
		  if($wpt5ss_rotate=='on')
		  {
			 echo ' checked="checked"';
		  }
		  echo ' />Rotate</label>';
          ?>
          </span>
      </div>
      <div class="row">
        <label>Theme of Icon Set: </label>
        <select name="wpt5ss_theme" id="wpt5ss_theme">
          <?php
            $wpt5ss_theme = get_option( 'wpt5ss_theme' );
            wpt5ss_select( $wpt5ss_theme, 'default', 'Default' );
            wpt5ss_select( $wpt5ss_theme, 'custom', 'Custom' );
            ?>
        </select>
      </div>
      <div id="wpt5ss_custom">
      <?php wpt5ss_mkColorFields($wpt5ss_array); ?>
      </div>
    <input type="submit" value="save changes" />
    </form>
    </div>
    </div>
    <?php
	echo '</div>
	<div id="wpt5ss_side">
	<div class="wpt5ss_box">';
	echo '<a href="http://www.a1netsolutions.com/Products/WordPress-Plugins" target="_blank" class="wpt5ss_advert"><img src="',$wpt5ss_conf["VEWPATH"],'/img/wp-advert-1.png" /></a>';
	echo '</div><div class="wpt5ss_box">';
	echo '<a href="http://www.ahsanulkabir.com/request-quote/" target="_blank" class="wpt5ss_advert"><img src="',$wpt5ss_conf["VEWPATH"],'/img/wp-advert-2.png" /></a>';
	echo '</div>
	</div>
	<div class="wpt5ss_clr"></div>
	</div>';
}

function wpt5ss_content()
{
	$wpt5ss_zoom = get_option( 'wpt5ss_zoom' );
	$wpt5ss_rotate = get_option( 'wpt5ss_rotate' );
	$wpt5ss_loc = get_option( 'wpt5ss_loc' );
	echo '
	<ul id="wpt5ss" class="';
	if($wpt5ss_zoom=='on')
	{
		echo 'wpt5ss_zoom';
	}
	if($wpt5ss_rotate=='on')
	{
		echo ' wpt5ss_rotate';
	}
	if($wpt5ss_loc=='left')
	{
		echo ' wpt5ss_left';
	}
	else
	{
		echo ' wpt5ss_right';
	}
	echo '">
	<li class="wpt5ss_facebook" onclick="javascript:wpt5ssFB();">b</li>
	<li class="wpt5ss_twitter" onclick="javascript:wpt5ssTW();">a</li>
	<li class="wpt5ss_google" onclick="javascript:wpt5ssGO();">c</li>
	<li class="wpt5ss_linkedin" onclick="javascript:wpt5ssIN();">j</li>
	<li class="wpt5ss_digg" onclick="javascript:wpt5ssDG();">F</li>
	</ul>
	';
	$wpt5ss_theme = get_option( 'wpt5ss_theme' );
	if($wpt5ss_theme=='custom')
	{
		global $wpt5ss_array;
		wpt5ss_mkCustomCSS($wpt5ss_array);
	}
	echo '<span>',get_option('wpt5ss_dev1'),get_option('wpt5ss_dev2'),get_option('wpt5ss_dev3'),'</span>';
}

add_action('wp_footer', 'wpt5ss_content', 100);
register_activation_hook(__FILE__, 'wpt5ss_activate');

?>