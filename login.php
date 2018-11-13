<!DOCTYPE html>
<html lang="en-us">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<title>Nanma Charitable And Educational Trust</title>
<!-- CSS src -->
<link href="css/font-style.css" rel="stylesheet">
<link href="css/style-custom.css" rel="stylesheet" >
<link href="css/style-media.css" rel="stylesheet" >
<link href="css/swiper.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<!-- Jquery src -->
<script src="js/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="js/carousel.js"></script>
</head>

<body id="scrollTop">
<section class="web_view_contact"> 
  <!-- Banner Start -->
  <article id="wrapper_inner"> 
    <!-- Slideshow 2 -->
    <ul class="rslides" id="slider2">
      <li><a href="#"><img src="images/login_bg.jpg" alt=""></a></li>
    </ul>
    <!-- Header Start -->
    
    
    <!-- Header Menu Start -->
    <article class="header_nav_cont">
      <section class="center_cont">
        <figure class="header_menu_container"> <a href="index.php" class="logo_cont"><img src="images/logo1.png" alt="Logo"></a>
          <section class="menu_cont">
            <nav class="top">
              <ul class="navHighlighter">
                <li><a href="index.php">HOME</a>               
                </li>
                <li><a href="aboutus.php">ABOUT US</a>
                  
                </li>
                <li><a href="services.php">SERVICES</a>
                  
                </li>
                <li><a href="newsfeed.php">NEWS FEED</a></li>
                <li><a href="donate.php">DONATE</a></li>
              
                <li><a href="contact.php">CONTACT US</a></li>
              </ul>
            </nav>
          </section>
        </figure>
        <!-- Header Menu End --> 
      </section>
    </article>
    <!-- Header End --> 
  </article>
  <!-- Banner End --> 
  <!-- SubNav Start -->
  <article class="subnav_cont_wrapper"  style="padding: 11% 0% 0% 0% !important;">
    <section class="center_cont">
      <figure class="subnav_content_cont"><a href="javascript:void(0);" class="home_icon_inner"></a><span>Login / Sign Up</span></figure>
    </section>
  </article>
  <!-- SubNav End --> 
</section>

<!-- Login Content Start -->
        <aside class="bpl_medical_content">
<a href="javascript:void(0);" style="margin:0% 45% 0% 0%;" onclick="logindiv(1);">LOGIN</a></aside>

<h3 style="margin:0% 0% 0% 46%!important;">Not a member ? </h3></br>

<aside class="bpl_medical_content">
<a href="javascript:void(0);" style="margin:-3% 44.3% 0% 0%;" onclick="logindiv(2);">SIGN UP</a></aside>
       
	
  <!-- Login Content End --> 
<form method="post" id="loginsubmit">
<input type="hidden" value="0" id="hiddenlogin" name="hiddenlogin">
<article class="prod_form_wrapper" id="loginpage">
    <section class="center_cont">
      
      <figure class="prod_form_right_cont">
	  <div class="pord_form_row_cont">
          <label>Select User Type<b>*</b></label>
          <select onchange="validateuser(this.value)" id="usertypeval" name="usertypeval">
		    <option value="0" >Select User Type</option>
            <option value="1" >ADMINISTRATOR</option>
			<option value="2" >VOLUNTEER</option>
            <option value="3" >USER</option>
          </select>
		  <h6 id="error_usertype" style="color:red"> </h6>
        </div>
        <div class="pord_form_row_cont" id="nameuser">
          <label>User Name<b>*</b></label>
          <input type="text" id="username" name="username">
		  <h6 id="error_username" style="color:red"> </h6>
        </div>
        <div class="pord_form_row_cont" id="userpassword">
          <label>Password<b>*</b></label>
          <input type="password" id="password" name="pswd">
		  <h6 id="error_userpassword" style="color:red"> </h6>
        </div>
		<div class="pord_form_row_cont" id="useremail" >
          <label>E-mail<b>*</b></label>
          <input type="text" id="email" name="email" onchange="EmailValidate(this.value);">
		  <h6 id="error_useremail" style="color:red"> </h6>
        </div>
		<div class="pord_form_row_cont" id="usermobile">
          <label>Mobile No<b>*</b></label>
          <input type="text" maxlength='10' id="mobile" name="mobile">
		  <h6 id="error_usermobile" style="color:red"> </h6>
        </div>
        <div class="pord_form_row_cont" id="login">
          <aside class="bpl_medical_content">
			<a href="javascript:void(0);"  id="logincheck" name="logincheck" style="margin:-3% 0% 0% 0%; background-color: #000 !important;" onclick="loginvalidate();">Login</a></aside>
        </div>
		
      </figure>
    </section>
  </article>
  </form>
  
 <form method="post" id="signupsubmit"> 
 <input type="hidden" value="0" id="hiddensignup" name="hiddensignup">
<article class="prod_form_wrapper" id="signuppage">
    <section class="center_cont">
      
      <figure class="prod_form_right_cont">
	  <div class="pord_form_row_cont">
          <label>Select User Type<b>*</b></label>
          <select  id="usertypevalue" name="usertypevalue">
		    <option value="0" >Select User Type</option>
            
			<option value="2" >VOLUNTEER</option>
            <option value="3" >USER</option>
          </select>
		  <h6 id="err_usertype" style="color:red"> </h6>
        </div>
	  
        <div class="pord_form_row_cont">
          <label>User Name<b>*</b></label>
          <input type="text" id="signupusername" name="signupusername">
		  <h6 id="err_username" style="color:red"> </h6>
        </div>
        <div class="pord_form_row_cont">
          <label>Password<b>*</b></label>
          <input type="password" id="signuppswd" name="signuppswd">
		  <h6 id="err_pswd" style="color:red"> </h6>
        </div>
		<div class="pord_form_row_cont">
          <label>Confirm Password<b>*</b></label>
          <input type="password" id="signupcnpswd" name="signupcnpswd">
		  <h6 id="err_cnpswd" style="color:red"> </h6>
        </div>
        <div class="pord_form_row_cont">
          <label>Reference Id<b>*</b></label>
          <input type="text" id="refid" name="refid">
		  <h6 id="err_refid" style="color:red"> </h6>
        </div>
		<div class="pord_form_row_cont" id="useremail" >
          <label>E-mail<b>*</b></label>
          <input type="text" id="signupemail" name="signupemail" onchange="EmailValidate(this.value);">
		  <h6 id="err_useremail" style="color:red"> </h6>
		  <h6 id="email_validation" style="color:red"> </h6>
        </div>
		<div class="pord_form_row_cont" id="usermobile">
          <label>Mobile No<b>*</b></label>
          <input type="text" id="signupmobile" name="signupmobile" maxlength="10" />
		  <h6 id="err_usermobile" style="color:red"> </h6>
        </div>
        <div class="pord_form_row_cont">
          <aside class="bpl_medical_content">
			<a href="javascript:void(0);" id="signcheck"  name="signcheck" style="margin:-3% 0% 0% 0%; background-color: #000 !important;" onclick="signupvalidate();">Sign up</a></aside>
        </div>
      </figure>
    </section>
  </article>
  </form>


<!-- Footer Contnet Start -->
<footer class="footer_wrapper web_view_contact">
  <section class="center_cont">
    <figure class="footer_content_cont">
      <section><a href="javascript:void(0);">Work with Us</a><a href="site-map.php">Site map</a><a href="privacy-policy.php">Privacy Policy</a><a href="terms-use.php">Terms of use</a></section>
      <section class="center_cont">
        <form>
          <label>Enter Your Email ID to Subscribe Newsletter</label>
          <input type="text" >
          <input type="submit" value="Subscribe">
        </form>
      </section>
      <span class="social_cont">
      <h4>Follow us on</h4>
      <a href="javascript:void(0);" class="twitter_icon" title="Twitter"></a><a href="javascript:void(0);" class="facebook_icon" title="Facebook"></a><a href="javascript:void(0);" class="google_icon" title="Google Plus"></a><a href="javascript:void(0);" class="linked_icon" title="Linked In"></a></span>
      <section class="copyright_content">© NANMA Charitable And Educational Trust 2017. All rights reserved.</section>
    </figure>
    <figure class="facebook_img_cont"><img src="images/facebook_img.jpg" alt="Facebook"></figure>
    <figure class="twitter_img_cont"><img src="images/twitter_img.jpg" alt="Twitter"></figure>
  </section>
</footer>
<!-- Footer Contnet End --> 

<a href="javascript:void(0);" class="scrollToTop" title="Scroll to Top"></a>
<script src="js/owl.carousel.js"></script> 
<script src="js/js_login.js"></script> 
<script>
    $(document).ready(function() {
      var owl = $("#owl-demo");
      owl.owlCarousel({
	   itemsCustom : [
          [320, 2],
		  [800, 3],
		  [1024, 4],
		  [1170, 5],
        ],
        navigation : true
      });
    });
    </script>
</body>
</html>

<?php 
require('connection.php');
extract($_POST);

$usertype='';
$email='';
$phone='';
$flag_login=0;
$flag_signup=0;

if(!empty($_POST)){	 

$flag_login=$_POST['hiddenlogin'];
$flag_signup=$_POST['hiddensignup'];
if($flag_login ==1 && $flag_signup==0){
$usertype=$_POST['usertypeval'];
$username=$_POST['username'];
$pswd=$_POST['pswd'];
$email=$_POST['email'];
$phone=$_POST['mobile'];

if($usertype ==1 || $usertype==2){
	$pswd=md5($pswd);
	$sql=mysqli_query($conn,"select * from nanma_user_detail where USER_DETAIL_USER_NAME='$username' and USER_DETAIL_USER_PASSWORD='$pswd'");
	$r=mysqli_num_rows($sql);	
	if($r==1)
	{ ?>
			<script type="text/javascript">
			var username='<?php echo $username; ?>';
			alert("Successfully Logged In");
			var querparam = '?username=' + username;                            
            window.location.href = "/index.php"+querparam;
			//window.location= "index.php";
			</script>; 
	<?php }
	else
	{?>
		<script type="text/javascript">
		alert("Invalid Login Credentilas");
		window.location= "login.php";
		</script>; 
<?php

	}
}
if($usertype ==3){
	$pswd=md5($pswd);
	$sql=mysqli_query($conn,"select * from nanma_user_detail where USER_DETAIL_USER_NAME='$username' and USER_DETAIL_USER_PASSWORD='$pswd' and USER_DETAIL_USER_EMAIL='$email' and USER_DETAIL_USER_MOBILE='$phone'");
	$r=mysqli_num_rows($sql);
	if($r==1)
	{ ?>
			<script type="text/javascript">
			alert("Successfully Logged In");
			window.location= "index.php";
			</script>; 
	<?php }
	else
	{?>
		<script type="text/javascript">
		alert("Invalid Login Credentilas");
		window.location= "login.php";
		</script>; 
<?php

	}
}
    
} 



if($flag_login ==0 && $flag_signup==1){
	
$usertype=$_POST['usertypevalue'];
$username=$_POST['signupusername'];
$pswd=$_POST['signuppswd'];
$cnfpswd=$_POST['signupcnpswd'];
$refid=$_POST['refid'];
$email=$_POST['signupemail'];
$phone=$_POST['signupmobile'];

	$pswd=md5($pswd);
	$cnfpswd=md5($cnfpswd);
	
	$sql=mysqli_query($conn,"select * from nanma_user_detail where USER_DETAIL_USER_NAME='$username' and USER_DETAIL_USER_PASSWORD='$pswd' and USER_DETAIL_USER_EMAIL='$email' and USER_DETAIL_USER_MOBILE='$phone'");
	$r=mysqli_num_rows($sql);
	if($r==1)
	{ ?>
			<script type="text/javascript">
			alert("Sorry this email-id allready registered.");
			window.location= "login.php";
			</script>; 
	<?php }
	else
	{
		
		$sign_sql=mysqli_query($conn,"INSERT INTO nanma_user_signup(USER_TYPE_ID,USER_SIGNUP_USER_NAME,USER_SIGNUP_PASSWORD,USER_SIGNUP_CONFIRM_PASSWORD,USER_SIGNUP_REF_ID,USER_SIGNUP_EMAIL,USER_SIGNUP_MOBILE) 
VALUES ($usertype,'$username','$pswd','$cnfpswd','$refid','$email','$phone')");
	$sql=mysqli_query($conn,"INSERT INTO nanma_user_detail(USER_TYPE_ID,USER_DETAIL_USER_NAME,USER_DETAIL_USER_PASSWORD,USER_DETAIL_USER_EMAIL,USER_DETAIL_USER_MOBILE) 
VALUES ($usertype,'$username','$pswd','$email','$phone')");
		
		?>
	    <script type="text/javascript">
		alert("Successfully Registered..");
		window.location= "login.php";
		</script>;
<?php
}
}
}

?>