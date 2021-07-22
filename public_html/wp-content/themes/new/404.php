<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */		
get_header(); ?>
<div class="siteWrapper">
<div class="bodyWrapper container">
<div class="drawer-overlay">
<div class="main-container">
<div class="row-section row">
        <!-------------------- Your top main-left part ----------------------->
        <div class="col-sm-12 col-md-8">
          <div class="leftSection">
          <div class="category-Section">
              <div class="cat-heading-panel">
           <div class="post">
            <h3 class="posttitle">Sorry! Page not found!</h3>
            </div>
            </div>
           	  <div class="list-category clearfix">
				
                     <div class="nws-cat-box">
                    <div class="cat-block">
                    <div class="nws-cat-content">
                   <p><?php get_search_form(); ?></p>
                    </div>
                    </div>
                    </div>
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
</div>
</div>
</div>
</div>
<?php
get_footer();
?>