<?php
session_start();
/*
  ==================================================
  Blank Template - Pmst Nepal
  Author: Best Nepal Pvt.Ltd "www.bestnepal.net"
  ==================================================
  Description: Default page template
  Template Name: Upload Video
  ==================================================
*/
//If the form is submitted
if(isset($_POST['submitted']) == "submitted") {
	if(isset($_POST["captchaResult"]) && $_POST["captchaResult"]!="" && $_SESSION["result"]==$_POST["captchaResult"])
	{
			$uploadvideo_id = trim($_POST['uploadvideo_id']);
			$path = $_FILES['video']['name'];
			$temp=$_FILES['video']['tmp_name'];
			if($_FILES['video']['size'] > (2147483648)) {
				wp_die('Your file size is to large.');
			} else {
			   $upload = wp_upload_bits($path, null, file_get_contents($temp));
			   $videolink = $upload['url'];
			}
			$name = trim($_POST['fullName']);
			$contactno = trim($_POST['contactno']);
			$email = trim($_POST['email']);
			$gender = trim($_POST['gender']);
			$songtitle = trim($_POST['songtitle']);
			$vocal = trim($_POST['vocal']);
			$lyrics = trim($_POST['lyrics']);
			$compose = trim($_POST['compose']);
		    $arrange = !empty($_POST['arrange']) ? trim($_POST['arrange']): '';
			$recorded = !empty($_POST['recorded']) ? trim($_POST['recorded']):'';
			$castname = !empty($_POST['castname']) ? trim($_POST['castname']): '';
			$mua = !empty($_POST['mua']) ? trim($_POST['mua']) : '';
			$editor = trim($_POST['editor']);
			$director = trim($_POST['director']);
			$postproduction = !empty($_POST['postproduction']) ? trim($_POST['postproduction']) : '';
			$thanksto = !empty($_POST['thanksto']) ? trim($_POST['thanksto']) : '';
			if(isset($_POST['message']) && !empty($_POST['message'])) { 
			$comment = trim($_POST['message']);
			}
			    $html="<strong>Upload Video Form Details<br><br></strong>";
				$html.="Upload Video ID:  ".$uploadvideo_id."<br>";
				$html.="Full Name:  ".$name."<br>";
				$html.="Contact Number:  ".$contactno."<br>";
				$html.="Email : ".$email."<br>";
				$html.="Upload Video Link:  ".$videolink."<br>";
				$html.="Gender : ".$gender."<br>";
				$html.="Song Title : ".$songtitle."<br>";
				$html.="Vocal : ".$vocal."<br>";
				$html.="Lyrics:  ".$lyrics."<br>";
				$html.="Compose:  ".$compose."<br>";
				$html.="Arrange:  ".$arrange."<br>";
				$html.="Recorded:  ".$recorded."<br>";
				$html.="Cast Names:  ".$castname."<br>";
				$html.="MUA:  ".$mua."<br>";
				$html.="Editor:  ".$editor."<br>";
				$html.="Director:  ".$director."<br>";
				$html.="Post production:  ".$postproduction."<br>";
				$html.="Thanks To:  ".$thanksto."<br>";
				if(isset($_POST['message']) && !empty($_POST['message'])) {
				$html.="Message:  ".$comment."<br>";
				}
				$html.="<br />Upload Video form <u>www.pmstnepal.com</u><br />";
				$b=$html;
				$to = "pmstnepal@gmail.com";
				$sub = "Upload Video ID: ".$uploadvideo_id;
                $headers_adm='';
                $headers_adm.='Date: ' . date('D, d M Y H:i:s O') . "\r\n";
                $headers_adm.='From: ' .  $name .  '<info@pmstnepal.com>' . "\r\n";
                $headers_adm.='MIME-Version: 1.0' . "\r\n";
                $headers_adm.='Reply-To: ' .  $name .  '<' . $email . '>' . "\r\n";
                $headers_adm.='Return-Path: ' .$email . "\r\n";
                $headers_adm.='X-Mailer: PHP/' . phpversion() . "\r\n";
                $headers_adm.="Content-Type: text/html; charset=iso-8859-1\r\n";
                $headers_adm.= "Cc: info@pmstnepal.com\n";
                if(mail($to, $sub, $b, $headers_adm))
                {
        			$template = 'Dear Sir/Madam '.$name.',<br><br>';
        			$template.= 'Your Upload Video ID: '.$uploadvideo_id.'<br>';
        			$template.='Thank you for uploading video with PMST Nepal! and welcome to PMST Nepal<br><br>
        			We would like to inform you that your video has been received. Our team will respond your email shortly.<br /><br />
        			Best regards,<br />
        			<strong>Pema Man Singh Tamang</strong><br />
        			Managing Director<br />
        			PMST Nepal <br />
        			Swoyambhu-15, Kathmandu.<br />
        			9841250304';
                    $from = ''.get_option( 'admin_email' ).'';
                    $from_name = ''.bloginfo('sitename').'';
                    $b2=$template;
                    $to2="".$email."";
                    $sub2="Thank for submitting your video with ".bloginfo('sitename');
                    $headers='';
                    $headers.='Date: ' . date('D, d M Y H:i:s O') . "\r\n";
                    $headers.='From: Pmst Nepal<info@pmstnepal.com>' . "\r\n";
                    $headers.='MIME-Version: 1.0' . "\r\n";
                    $headers.='Reply-To: Pmst Nepal<info@pmstnepal.com>' . "\r\n";
                    $headers.='Return-Path: info@pmstnepal.com' . "\r\n";
                    $headers.='X-Mailer: PHP/' . phpversion() . "\r\n";
                    $headers.="Content-Type: text/html; charset=iso-8859-1\r\n";
        			@mail($to2,$sub2,$template, $headers);  
    				$emailSent = true;
                } else {
                $hasError = true;
                }
	} else {
		$message="The security result you typed is not correct. Please, try again.";
	}
}
get_header(); ?>
<style>
.loaderImg
{
  left: 50%;
  margin-left: -32px;
  margin-top: -32px;
  position: absolute;
  top: 70%;
}
</style>
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
                <?php if(isset($emailSent) && $emailSent == true) { ?>
                <ul class="list-group">
                <li class="list-group-item list-group-item-success">
                <strong>Thanks! <?php echo $name;?></strong>&nbsp;&nbsp;Your video have been submitted Sucessfully with PMST Nepal and welcome to PMST Nepal!<br>
                 We would like to inform you that your video has been received. Our team will respond your email shortly.To Know more about PMST Nepal. Go, back to <a href="http://www.pmstnepal.com" target="_blank">Pmst Nepal</a><br /><br />
                </li></ul>
                <?php } ?>
                <?php if(isset($hasError) && $hasError == true) { ?>
                <ul class="list-group"><li class="list-group-item list-group-item-danger">
                <strong>Error!</strong> Your submission was unsuccessful, please try again.</li></ul>
                <?php } elseif(isset($message)) { ?>
                <ul class="list-group"><li class="list-group-item list-group-item-danger"><strong>Warning!</strong> <?php echo $message; ?></li></ul>
                <?php } ?>
                <div style="margin-left:15px;margin-right:15px;">
                   <form action="" method="post" role="form" enctype="multipart/form-data" onsubmit="return validForm()">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/loader-large.gif" alt="loader" id="loaderImg" class="loaderImg" style="display:none;">
                   		<input type="hidden" value="<?php echo rand(100000, 9);?>" id="uploadvideo_id" name="uploadvideo_id" />
                       <div class="row">
                        <div class="col-12">
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Full Name: <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="fullName" value="<?php if(isset($_POST['fullName']) && !isset($emailSent))  echo $_POST['fullName'];?>" id="fullName" placeholder="Enter Full Name">
                            </div>
                            </div>
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Contact No:  <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="contactno" value="<?php if(isset($_POST['contactno']) && !isset($emailSent)) echo $_POST['contactno'];?>" id="contactno" placeholder="Enter your Contact No">
                            </div>
                            </div>
                            <div class="form-group">
                            <label for="exampleInputEmail1">Email address <strong>*</strong></label>
                            <input type="text" name="email" value="<?php if(isset($_POST['email']) && !isset($emailSent)) echo $_POST['email'];?>" class="form-control" id="email"  placeholder="Enter Your Email">
                            </div>
                            <div class="form-group ">        
                            <fieldset class="form-group">
                            <label for="example-text-input" >Gender: <strong>*</strong></label>
                            <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" id="gender" value="Male" checked>
                            Male
                            </label>
                            </div>
                            <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="gender" id="gender" value="Female">
                            Female
                            </label>
                            </div>
                            </fieldset>
                            </div>
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Upload Video: <strong>*</strong></label>
                            <div class="col-10">
                                <input type="file" name="video" id="video" accept=".mp4,.m4v,.mov,.wmv,.avi,.mpg,.ogv,.3gp,.3g2"/>
                            </div> 
                            </div>
                            <h3 class="posttitle">Song Description</h3>            
       						<div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Song Title: <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="songtitle" value="<?php if(isset($_POST['songtitle']) && !isset($emailSent))  echo $_POST['songtitle'];?>" id="songtitle" placeholder="Enter your Song Title">
                            </div>               
                            </div>
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Vocal: <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="vocal" value="<?php if(isset($_POST['vocal']) && !isset($emailSent))  echo $_POST['vocal'];?>" id="vocal" placeholder="Enter your Vocal">
                            </div> 
                            </div>
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Lyrics:  <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="lyrics" value="<?php if(isset($_POST['lyrics']) && !isset($emailSent))  echo $_POST['lyrics'];?>" id="lyrics" placeholder="Enter your Lyrics">
                            </div> 
                            </div>
                             <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">compose:  <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="compose" value="<?php if(isset($_POST['compose']) && !isset($emailSent))  echo $_POST['compose'];?>" id="compose" placeholder="Enter your compose">
                            </div> 
                            </div>
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Arrange: </label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="arrange" value="<?php if(isset($_POST['arrange']) && !isset($emailSent))  echo $_POST['arrange'];?>" id="arrange" placeholder="Enter your arrange">
                            </div> 
                            </div>
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Recorded: </label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="recorded" value="<?php if(isset($_POST['recorded']) && !isset($emailSent))  echo $_POST['recorded'];?>" id="recorded" placeholder="Enter your Recorded">
                            </div> 
                            </div>
                            <h3 class="posttitle">Video Description</h3>            
       						<div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Cast Name: </label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="castname" value="<?php if(isset($_POST['castname']) && !isset($emailSent))  echo $_POST['castname'];?>" id="castname" placeholder="Enter your Cast Name">
                            </div>               
                            </div>
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">MUA: </label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="mua" value="<?php if(isset($_POST['mua']) && !isset($emailSent))  echo $_POST['mua'];?>" id="mua" placeholder="Enter your MUA">
                            </div> 
                            </div>
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Editor:  <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="editor" value="<?php if(isset($_POST['editor']) && !isset($emailSent))  echo $_POST['editor'];?>" id="editor" placeholder="Enter your Editor">
                            </div> 
                            </div>
                             <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Director:  <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="director" value="<?php if(isset($_POST['director']) && !isset($emailSent))  echo $_POST['director'];?>" id="director" placeholder="Enter your Director">
                            </div> 
                            </div>
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Post Production:  </label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="postproduction" value="<?php if(isset($_POST['postproduction']) && !isset($emailSent))  echo $_POST['postproduction'];?>" id="postproduction" placeholder="Enter your Post Production">
                            </div> 
                            </div>
                            <div class="form-group ">
                            <label for="example-datetime-local-input" class="col-2 col-form-label">Thanks To:  </label>
                            <div class="col-10">
                            <textarea class="form-control" name="thanksto"  id="thanksto" rows="3"><?php if(isset($_POST['thanksto']) && !isset($emailSent)) echo $_POST['thanksto'];?></textarea>
                            </div>
                            </div>
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Message if any: </label>
                            <div class="col-10">
                            <textarea class="form-control" name="message"  id="message" rows="3"><?php if(isset($_POST['message']) && !isset($emailSent)) echo $_POST['message'];?></textarea>
                            </div> 
                            </div>
                             
                             <div class="form-group">               
							<?php
                            // init variables
                            $min_number = 1;
                            $max_number = 25;
                            // generating random numbers
                            $random_number1 = mt_rand($min_number, $max_number);
                            $random_number2 = mt_rand($min_number, $max_number);
                            ?>
                            <?php
							$_SESSION['result']=$random_number1 + $random_number2;
                            echo $random_number1 . ' + ' . $random_number2 . ' = ';
                            ?>
                            <input type="text" name="captchaResult" id="captchaResult"  size="2" value=""/>
                            </div>
                            <div class="form-group">
                            <input type="submit" name="submitted" value="Submit" class="btn btn-primary" />
                            </div>
                    </div>
                    </div>
              </form>
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

<script type="text/javascript">
	
	function validForm(){
		var contact = document.getElementById("contactno").value;
		var oFile = document.getElementById("video").files[0]; 
		if(document.getElementById("fullName").value == ""){
		    window.alert("Full name is required");
		    document.getElementById("fullName").focus();
		    return false;
		}else if(document.getElementById("contactno").value == ""){
		    window.alert("Contact Number is required");
		    document.getElementById("contactno").focus();
		    return false;
	
		}else if(!isNumber(contact)){
		    window.alert("Please correct your contact No");
		    document.getElementById("contactno").focus();
		    return false;
	
		}else if(contact.length < 6){
		    window.alert("you have to enter at least 6 digit!");
		    document.getElementById("contactno").focus();
		    return false;
	
		}else if(document.getElementById("email").value == ""){
		    alert("Email is required");
		    document.getElementById("email").focus();
		    return false;
		}else if(email.value.indexOf("@", 0) < 0){ 
			window.alert("Please enter a valid e-mail address."); 
			document.getElementById("email").focus(); 
			return false; 
    	}else if(document.getElementById("gender").value == ""){
		    window.alert("Gender is required");
		    document.getElementById("gender").focus();
		    return false;
		}else if(document.getElementById("video").value == "") {
             window.alert("You forgot to attach video!");
             document.getElementById("video").focus();
             return false;  
        }else if(document.getElementById("songtitle").value == ""){
		    window.alert("Song Title is required");
		    document.getElementById("songtitle").focus();
		    return false;
		} else if(document.getElementById("lyrics").value == ""){
		   window.alert("Lyrics is required");
		    document.getElementById("lyrics").focus();
		    return false;
		}else if(document.getElementById("compose").value == ""){
		    window.alert("Compose is required");
		    document.getElementById("compose").focus();
		    return false;
		}else if(document.getElementById("editor").value == ""){
		    window.alert("Editor is required");
		    document.getElementById("editor").focus();
		    return false;
		}else if(document.getElementById("director").value == ""){
		    window.alert("Director is required");
		    document.getElementById("director").focus();
		    return false;
		}else if(document.getElementById("captchaResult").value == ""){
		    window.alert("Captcha Result is required");
		    document.getElementById("captchaResult").focus();
		    return false;
		}else if(oFile.size > 2147483648) {
			window.alert("File size must under 2GB!");
			document.getElementById("video").focus();
			return;
        } else {
        $('#loaderImg').show(); 
        return true;
        }
	}
    
	function isNumber(n) {
  	return !isNaN(parseFloat(n)) && isFinite(n);
	}
</script>
<?php get_footer(); ?>