


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
<!-- Web Device Statr -->
<section class="web_device"> 
  <!-- Header Menu Start -->
  <article id="wrapper_inner"> 
    <!-- Slideshow 2 -->
    <ul class="rslides" id="slider2">
      <li><a href="#"><img src="images/aboutus1_bg.jpg" alt=""></a></li>
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
  <!-- Header End --> 
  <!-- SubNav Start -->
  <article class="subnav_cont_wrapper" style="margin-top:60px;">
    <section class="center_cont">
      <figure class="subnav_content_cont"><a href="javascript:void(0);" class="home_icon_inner"></a><span>News &amp; Events</span></figure>
    </section>
  </article>
  <!-- SubNav End --> 
  
  <!-- News Event Start -->
  <article class="news_wrap">
    <section class="center_cont">
      <figure class="news_container">
        <div>
          <label>Current Year : </label>
          <span>2017</span> </div>
        <div class="news_heading">News &amp; Events</div>
        <div class="news_dorp_right">
          <select>
            <option>Select Month</option>
          </select>
          <select>
            <option>Select Year</option>
          </select>
        </div>
      </figure>
    </section>
  </article>
  <!-- News Event End --> 
  
  <!-- News Event Content Start -->
  <html>
<head>
<meta charset="utf-8">
<title>Newsfeed</title>
<style>
label{display:block;}
form input{border:none;outline:none;box-sizing:border-box;margin-left:10%; width: 1200px;
    height: 100px;padding: 50px;    }
form.invert input{border:1px solid rgba(0,0,0,0.2);outline:none;}

form>button:nth-of-type(1){
 color:green;display:none;
}
form>button:nth-of-type(2){
 color:red;display:none;
}
form>button:nth-of-type(3){
 color:red;display:inline-block;
}
form.invert>button:nth-of-type(1){
 display:inline-block;
}
form.invert>button:nth-of-type(2){
 display:inline-block;
}
form.invert>button:nth-of-type(3){
 display:none;
}
</style>
<script>
(function(W){
 var D,form,bts,ipt;
 function init(){
  D=W.document,previous=[];
  form=D.getElementsByTagName('form')[0];
  bts=form.getElementsByTagName('button');
  ipt=form.getElementsByTagName('input');
  form.addEventListener('submit',save,false);
  bts[1].addEventListener('click',cancel,false);
  bts[2].addEventListener('click',edit,false);
 }
 function save(e){
  e.preventDefault();
  form.classList.remove('invert');
  var l=ipt.length;
  while(l--){
   ipt[l].readOnly=true;
  };
  previous=[];
  //send your info here 
 }
 function edit(e){
  e.preventDefault();
  form.classList.add('invert');
  var l=ipt.length;
  while(l--){
   previous[l]=ipt[l].value;
   ipt[l].readOnly=false;
  }
 }
 function cancel(e){
  form.classList.remove('invert');
  e.preventDefault();
  var l=ipt.length;
  while(l--){
   ipt[l].value=previous[l];
   ipt[l].readOnly=true;
  }
 }
 W.addEventListener('load',init,false);
})(window)
</script>
</head>
<body>
<form>
<label><input readonly></label>
<label><input readonly></label>
<label><input readonly></label>
<label><input readonly></label>
<label><input readonly></label>
<label><input readonly></label>
<label><input readonly></label>

<button>Save</button><button>Cancel</button><button>Edit</button>
</form>
</body>
</html>




  <!-- News Event Content End --> 
  
  <!-- Footer Contnet Start -->
  <footer class="footer_wrapper">
    <section class="center_cont">
      <figure class="footer_content_cont">
        <section><a href="javascript:void(0);">Work with Us</a><a href="javascript:void(0);">Site map</a><a href="javascript:void(0);">Privacy Policy</a><a href="javascript:void(0);">Terms & Conditions</a></section>
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
</section>
<!-- Web Device End --> 

<a href="javascript:void(0);" class="scrollToTop" title="Scroll to Top"></a> 
<script src="js/gallery.js" type="text/javascript"></script> 
<script type="text/javascript">
    $(function() {
		$(".basic2 .carousel").jCarouselLite({
			btnNext: ".basic2 .next",
			btnPrev: ".basic2 .prev",
			speed: 800
		});
    });
</script> 
<script src="js/owl.carousel.js"></script> 
<script>
    $(document).ready(function() {
      var owl = $("#owl-demo");
      owl.owlCarousel({
	   itemsCustom : [
          [320, 1],
          [600, 2],
		  [800, 3],
        ],
        navigation : true
      });
    });
    </script>
</body>
</html>
