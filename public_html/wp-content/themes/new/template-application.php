<?php
session_start();
/*
  ==================================================
  Blank Template - Pmst Nepal
  Author: Best Nepal Pvt.Ltd "www.bestnepal.net"
  ==================================================
  Description: Default page template
  Template Name: Application
  ==================================================
*/
//If the form is submitted
if(isset($_POST['submitted']) == "submitted") {
	if(isset($_POST["captchaResult"]) && $_POST["captchaResult"]!="" && $_SESSION["result"]==$_POST["captchaResult"])
	{
              $application_id = trim($_POST['application_id']);
              $path = $_FILES['audio']['name'];
              $temp=$_FILES['audio']['tmp_name'];
              if($_FILES['audio']['size'] > (5242880)) {
                    //wp_die generates a visually appealing message element
                    wp_die('Your file size is to large.');
              } else {
                   $upload = wp_upload_bits($path, null, file_get_contents($temp));
                   $audiolink = $upload['url'];
             }
              
              $name = trim($_POST['fullName']);
              $address = trim($_POST['address']);
              $dob = trim($_POST['dob']);
              $email = trim($_POST['email']);
              $gender = trim($_POST['gender']);
              $facebookid = trim($_POST['facebookid']);
              $contact = trim($_POST['contact']);
              $nationality = trim($_POST['nationality']);
              $songtitle = trim($_POST['songtitle']);
              $lyricscompose = trim($_POST['lyricscompose']);
              $previousrecord = trim($_POST['previousrecord']);
              if(isset($_POST['previousrecordlink']) && !empty($_POST['previousrecordlink']) && $_POST['previousrecordlink']!=""){
                $previousrecordlink = trim($_POST['previousrecordlink']);
              }
              $comment = trim($_POST['message']);

              $template = 'Dear Sir/Madam '.$name.',<br><br>';
              $template.= 'Your Application ID: '.$application_id.'<br>';
              $template.='Thank you for your 1st Chance Application with PMST Nepal! and welcome to PMST Nepal<br><br>
              We would like to inform you that your Application has been received. Our team will respond your email shortly.<br /><br />
              Best regards,<br />
              <strong>Pema Man Singh Tamang</strong><br />
              Managing Director<br />
              PMST Nepal <br />
              Swoyambhu-15, Kathmandu.<br />
              9841250304';
              $to="".$email."";
			  $sub="You made an Application Submit";
			  /*$headers[] = 'Date: ' . date('D, d M Y H:i:s O') . "\r\n";
			  $headers[] = 'From: Pmst Nepal<info@pmstnepal.com>' . "\r\n";
              $headers[] = 'Reply-To: Pmst Nepal<info@pmstnepal.com>' . "\r\n";
              $headers[] = "Content-Type: text/html\n";
              $headers[] = "X-WPCF7-Content-Type: text/html\n";
              $mail = wp_mail($to,$sub,$template, $headers);*/
			  $headers='';
			  $headers.='Date: ' . date('D, d M Y H:i:s O') . "\r\n";
			  $headers.='From: Pmst Nepal<info@pmstnepal.com>' . "\r\n";
			  $headers.='MIME-Version: 1.0' . "\r\n";
			  $headers.='Reply-To: Pmst Nepal<info@pmstnepal.com>' . "\r\n";
			  $headers.='Return-Path: info@pmstnepal.com' . "\r\n";
			  $headers.='X-Mailer: PHP/' . phpversion() . "\r\n";
              $headers.="Content-Type: text/html; charset=iso-8859-1\r\n"; 
			  if(mail($to,$sub,$template, $headers))
			  {
					$html="<strong>Application Form Details<br><br></strong>";
					$html.="Application ID:  ".$application_id."<br>";
					$html.="Full Name:  ".$name."<br>";
					$html.="Address : ".$address."<br>";
					$html.="Date of Birth : ".$dob."<br>";
					$html.="Email : ".$email."<br>";
					$html.="Gender : ".$gender."<br>";
					$html.="Facebook ID:  ".$facebookid."<br>";
					$html.="Contact Number:  ".$contact."<br>";
					$html.="Audition Audio Link - Any kind of song record:  ".$audiolink."<br>";
					$html.="Song Title:  ".$songtitle."<br>";
					$html.="Lyrics compose:  ".$lyricscompose."<br>";
					$html.="Previous Record:  ".$previousrecord."<br>";
					if(isset($_POST['previousrecordlink']) && !empty($_POST['previousrecordlink']) && $_POST['previousrecordlink']!=""){
					$html.="Previous Record Link:  ".$previousrecordlink."<br>";
					}
					$html.="Comments/Questions:  ".$comment."<br>";
					$html.="<br />Application Form Received from <u>www.pmstnepal.com</u><br />";
  	                $html_adm=$html;
					$to_adm = "pasanrumba@gmail.com";
					$sub_adm = "Application from 1st Chance Applicant: ".$application_id;
					/*$headers_adm[] ='Date: ' . date('D, d M Y H:i:s O') . "\r\n";
					$headers_adm[] = 'From: '.$name.' <info@pmstnepal.com>';
                    $headers_adm[] = 'Reply-To: '.$name.' <'.$email.'>';
                    $headers_adm[] = "Content-Type: text/html\n";
                    $headers_adm[] = "Cc: info@pmstnepal.com\n";
                    $headers_adm[] = "X-WPCF7-Content-Type: text/html\n";
                    @wp_mail($to_adm, $sub_adm, $html_adm, $headers_adm);*/
					$headers_adm='';
					$headers_adm.='Date: ' . date('D, d M Y H:i:s O') . "\r\n";
					$headers_adm.='From: ' .  $name .  '<info@pmstnepal.com>' . "\r\n";
					$headers_adm.='MIME-Version: 1.0' . "\r\n";
					$headers_adm.='Reply-To: ' .  $name .  '<' . $email . '>' . "\r\n";
					$headers_adm.='Return-Path: ' .$email . "\r\n";
					$headers_adm.='X-Mailer: PHP/' . phpversion() . "\r\n";
					$headers_adm.="Content-Type: text/html; charset=iso-8859-1\r\n";
					$headers_adm.= "Cc: info@pmstnepal.com\n";
					@mail($to_adm, $sub_adm, $html_adm, $headers_adm);
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
                <strong>Thanks! <?php echo $name;?></strong>&nbsp;&nbsp;Your application form have been submitted Sucessfully with PMST Nepal and welcome to PMST Nepal!<br>
                 We would like to inform you that your Application has been received. Our team will respond your email shortly.<br /><br />
                </li></ul>
                <?php } ?>
                <?php if(isset($hasError) && $hasError == true) { ?>
                <ul class="list-group"><li class="list-group-item list-group-item-danger">
                <strong>Error!</strong> Your submission was unsuccessful, please try again.</li></ul>
                <?php } elseif(isset($message)) { ?>
                <ul class="list-group"><li class="list-group-item list-group-item-danger"><strong>Warning!</strong> <?php echo $message; ?></li></ul>
                <?php } ?>
               
                <div style="margin-left:15px;margin-right:15px;">
                   <form action="" method="post" role="form" id="applicationForm" enctype="multipart/form-data" onsubmit="return validForm()">
                        <img src="<?php bloginfo('template_directory'); ?>/assets/images/loader-large.gif" alt="loader" id="loaderImg" class="loaderImg" style="display:none;">
                   		<input type="hidden" value="<?php echo rand(100000, 9);?>" id="application_id" name="application_id" />
                       <div class="row">
                        <div class="col-12">
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Full Name: <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="fullName" value="<?php if(isset($_POST['fullName']) && !isset($emailSent))  echo $_POST['fullName'];?>" id="fullName" placeholder="Enter Full Name">
                            </div>
                            </div>
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Address:  <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="address" value="<?php if(isset($_POST['address']) && !isset($emailSent)) echo $_POST['address'];?>" id="address" placeholder="Enter your Address">
                            </div>
                            </div>          
                            <div class="form-group ">
                            <label for="example-datetime-local-input" class="col-2 col-form-label">Date of Birth:  <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="dob" value="<?php if(isset($_POST['dob']) && !isset($emailSent)) echo $_POST['dob'];?>" id="dob" placeholder="Enter Date of Birth">
                            </div>
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
                            <div class="form-group">
                            <label for="exampleInputEmail1">Email address <strong>*</strong></label>
                            <input type="text" name="email" value="<?php if(isset($_POST['email']) && !isset($emailSent)) echo $_POST['email'];?>" class="form-control" id="email"  placeholder="Enter Your Email">
                            </div>                  
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Facebook ID:  <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="facebookid" value="<?php if(isset($_POST['facebookid']) && !isset($emailSent))  echo $_POST['facebookid'];?>" id="facebookid"  placeholder="Enter Your Facebook ID">
                            </div>   
                            </div>
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Contact Number: <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="contact" value="<?php if(isset($_POST['contact']) && !isset($emailSent))  echo $_POST['contact'];?>" id="contact" placeholder="Enter your Contact Number">
                            </div> 
                            </div>
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Audition Audio - Any kind of song record: <strong>*</strong></label>
                            <div class="col-10">
                                <input type="file" name="audio" id="audio" accept=".mp3,.m4a,.ogg,.wav"/>
                            </div> 
                            </div>              
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Song Title: <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="songtitle" value="<?php if(isset($_POST['songtitle']) && !isset($emailSent))  echo $_POST['songtitle'];?>" id="songtitle" placeholder="Enter your Song Title">
                            </div>               
                            </div>
                            <div class="form-group ">
                            <label for="example-text-input" class="col-2 col-form-label">Lyrics compose:  <strong>*</strong></label>
                            <div class="col-10">
                            <input class="form-control" type="text" name="lyricscompose" value="<?php if(isset($_POST['lyricscompose']) && !isset($emailSent))  echo $_POST['lyricscompose'];?>" id="lyricscompose" placeholder="Enter your Lyrics compose">
                            </div> 
                            </div>
                            <div class="form-group ">
                            <fieldset class="form-group">
                            <label for="example-text-input" >Previous Record: <strong>*</strong></label>
                            <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="previousrecord" id="previousrecordNo" value="No" checked onclick="ShowHideDiv()">
                             No
                            </label>
                            </div>
                            <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="previousrecord" id="previousrecordYes" value="Yes" onclick="ShowHideDiv()">
                             Yes
                            </label>
                            </div>
                            </fieldset>                
                            </div>
                            <div id="dvpreviousrecordlink" style="display: none">
                                <div class="form-group ">
                                <label for="example-text-input" class="col-2 col-form-label">Previous Record Link: <strong>*</strong></label>
                                <div class="col-10">
                                <input class="form-control" type="text" name="previousrecordlink" value="<?php if(isset($_POST['previousrecordlink']) && !isset($emailSent))  echo $_POST['previousrecordlink'];?>" id="previousrecordlink" placeholder="Enter your Previous Record Link" on>
                                
                                </div>               
                                </div>
                            </div>
                            <div class="form-group">
                            <label for="exampleTextarea">Message</label>
                            <textarea class="form-control" name="message"  id="exampleTextarea" rows="3"><?php if(isset($_POST['message']) && !isset($emailSent)) echo $_POST['message'];?></textarea>
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
		var previousrecordYes = document.getElementById("previousrecordYes");
		var contact = document.getElementById("contact").value;
		var oFile = document.getElementById("audio").files[0]; 
		if(document.getElementById("fullName").value == ""){
		    window.alert("Full name is required");
		    document.getElementById("fullName").focus();
		    return false;
		}else if(document.getElementById("address").value == ""){
		    window.alert("Adress is required");
		    document.getElementById("address").focus();
		    return false;
		} else if(document.getElementById("dob").value == ""){
		   window.alert("Date of Birth is required");
		    document.getElementById("dob").focus();
		    return false;
		}else if(document.getElementById("gender").value == ""){
		    window.alert("Gender is required");
		    document.getElementById("gender").focus();
		    return false;
		}else if(document.getElementById("email").value == ""){
		    alert("Email is required");
		    document.getElementById("email").focus();
		    return false;
		}else if(email.value.indexOf("@", 0) < 0){ 
			window.alert("Please enter a valid e-mail address."); 
			document.getElementById("email").focus(); 
			return false; 
    	}else if(email.value.indexOf(".", 0) < 0) { 
			window.alert("Please enter a valid e-mail address."); 
			document.getElementById("email").focus(); 
			return false; 
   		}else if(document.getElementById("facebookid").value == ""){
		    window.alert("Facebook ID is required");
		    document.getElementById("facebookid").focus();
		    return false;
	
		}else if(document.getElementById("contact").value == ""){
		    window.alert("Contact Number is required");
		    document.getElementById("contact").focus();
		    return false;
	
		}else if(!isNumber(contact)){
		    window.alert("Please correct your contact No");
		    document.getElementById("contact").focus();
		    return false;
	
		}else if(contact.length < 6){
		    window.alert("you have to enter at least 6 digit!");
		    document.getElementById("contact").focus();
		    return false;
	
		}else  if(document.getElementById("audio").value == "") {
             window.alert("You forgot to attach file!");
             document.getElementById("audio").focus();
             return false;  
        }else if(document.getElementById("songtitle").value == ""){
		    window.alert("Song Title is required");
		    document.getElementById("songtitle").focus();
		    return false;
		}else if(document.getElementById("lyricscompose").value == ""){
		    window.alert("Lyrics Compose is required");
		    document.getElementById("lyricscompose").focus();
		    return false;
		}else if(previousrecordYes.checked && document.getElementById("previousrecordlink").value == ""){
			window.alert("Previous Record Link is required!");
			document.getElementById("previousrecordlink").focus();
			return false;
		}else if(document.getElementById("captchaResult").value == ""){
		    window.alert("Captcha Result is required");
		    document.getElementById("captchaResult").focus();
		    return false;
		}else if(oFile.size > 5242880) {
			window.alert("File size must under 5mb!");
			document.getElementById("audio").focus();
			return;
        } else {
        $('#loaderImg').show(); 
        return true;
        }
	}
    function isValidEmailAddress(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
    return pattern.test(emailAddress);
    }
	function ShowHideDiv() {
            var previousrecordYes = document.getElementById("previousrecordYes");
            var dvpreviousrecordlink = document.getElementById("dvpreviousrecordlink");
            dvpreviousrecordlink.style.display = previousrecordYes.checked ? "block" : "none";
			
    }
	
	function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
    }
    
   
</script>
 
<?php get_footer(); ?>