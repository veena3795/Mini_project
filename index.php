<?php 
$username='';
if(isset($_GET['username'])){
	$username="Welcome ".$_GET['username'];
}else{
	$username='';
}

?>
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
<script src="js/poposlides.js"></script>
<script src="js/lightslider.js"></script>
<script src="js/carousel.js"></script>
</head>

<body id="scrollTop">
<!-- Web Device Statr -->
<section class="web_device"> 
  <!-- Banner Start -->
  <article id="wrapper">
    <ul class="rslides" id="slider2">
      <li><a href="#"><img src="images/kunju01.jpg" alt=""></a></li>
      <li><a href="#"><img src="images/kunju02.jpg" alt=""></a></li>
      <li><a href="#"><img src="images/kunju03.jpg" alt=""></a></li>
      <li><a href="#"><img src="images/kunju04.jpg" alt=""></a></li>
    </ul>
    <header class="header_cont">
      
    </header>	
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
		  <h4 style="color:#fff; font-weight:600; text-transform: uppercase; margin:6% 0% 0% 3%;"> <?php echo $username?></h4>
        </figure>
      </section>
    </article>
    <figure class="banner_logo_cont"><img src="images/nanma_logo.png" alt="Nanma Logo"></figure>
  </article>
  <!-- Banner End --> 
  <!-- Home Contnet and video start-->
  <article class="decades_cont">
    <section class="center_cont">
      <figure class="decades_content_cont">
        <h2 class="decades_heading_content">NANMA <br/>CHARITABLE AND EDUCATIONAL TRUST</h2>
        <aside class="bpl_medical_content">
Nanma Charitable trust has been working in the field of charity for the last 15 years.Our efforts with Govt. and public co-orporation have been praiseworthy and captured the attention of the people all around. A large number of poor helpless and mentally retarded people are living in this trust peacefully and comfortably.<br/><br/>

Protection of woman, children and their social welfare activities,Medical Care, Oldage Homes, care for physically challenged people, Medical Camps,awareness classes, awareness programmes against the use of alcohol and liquor, drug abuse , domestic violence are the major aims of this institution.<br/><br/>

We also conduct programmes against “Social Evils”. We are organizing programmes for natural integration and programmes for the youth. We help the economically backward people people and give financial assistance for their marriages. In all our activities we are guided and supported by the Govt.NGO’s. and other organization who work for the welfare of the people.<br/><br/>
<a href="login.php" style="margin:3% 45% 0% 0%;">LOGIN</a></aside>
        
      </figure>
    </section>
  </article> 
  
  <!-- NewsEvent Contnet Start -->
  <article class="newsevent_wrapper">
    <section class="center_cont">
      <h2 class="wordcontent_heading">News &amp; Events</h2>
      <section class="newsevent_thumbnail_section">
        <figure class="item">
          <ul id="content-slider" class="content-slider news-grid">
            <li> <a href="javascript:void(0);">
              <figure> <img src="images/news1.jpg">
                <figcaption>
                  <p><span class="hc_effect1">More</span></p>
                </figcaption>
              </figure>
              </a>
              <h3><strong>NANMA RAAV</strong> Kochi<br>
                May 6 - 8, 2016</h3>
            </li>
            <li> <a href="javascript:void(0);">
              <figure> <img src="images/news1.jpg">
                <figcaption>
                  <p><span class="hc_effect1">More</span></p>
                </figcaption>
              </figure>
              </a>
              <h3><strong>NANMA RAAV</strong> Mumbai<br>
                April 10-12, 2016,</h3>
            </li>
            <li> <a href="javascript:void(0);">
              <figure> <img src="images/news1.jpg">
                <figcaption>
                  <p><span class="hc_effect1">More</span></p>
                </figcaption>
              </figure>
              </a>
              <h3><strong>NANMA RAAV</strong> Kannur<br>
                Bangalore, 7 -9 Jan 2016</h3>
            </li>
            <li> <a href="javascript:void(0);">
              <figure> <img src="images/news1.jpg">
                <figcaption>
                  <p><span class="hc_effect1">More</span></p>
                </figcaption>
              </figure>
              </a>
              <h3><strong>NANMA RAAV</strong> Trivandrum<br>
                May 6 - 8, 2016</h3>
            </li>
          </ul>
          <a href="news-event.php" class="viewall_btn">View All</a> </figure>
      </section>
    </section>
  </article>
  <!-- NewsEvent Contnet End --> 
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
<script src="js/main.js"></script> 
<script src="js/content.slider.js"></script> 
<script>
$(document).ready(function() {
	$(function () {
      // Slider
      $("#slider2, #slider").responsiveSlides({
        auto: true,
        pager: true,
        speed: 1000,
      });
    });
	// Testimonials
	$(".content-slider").lightSlider({
                loop:true,
				item: 4,
                keyPress:true,
				speed: 800,
    });
   (function($){
            $(window).enllax();
        })(jQuery);
		
		$('#contentSlide').bjqs({
            animtype      : 'slide',
            height        : 220,
            width         : 900,
            responsive    : true,
            randomstart   : true
          });
});
</script> 
<script type="text/javascript">
        $(function() {
            $(".default .carousel").jCarouselLite({
                btnNext: ".default .next",
                btnPrev: ".default .prev",
    			speed: 800
            });
			$(".mixedContent .carousel").jCarouselLite({
				btnNext: ".mixedContent .next",
				btnPrev: ".mixedContent .prev",
				speed: 800
			});
			$(".imageSlider .carousel").jCarouselLite({
                btnNext: ".imageSlider .next",
                btnPrev: ".imageSlider .prev",
                visible: 1,
                speed: 900,
				auto: 2500
            });
        });
</script> 
<script src="js/script.js"></script> 
<script src="js/owl.carousel.js"></script> 
<script>
    $(document).ready(function() {
      var owl = $("#owl-demo, #owl-demo1, #owl-demo2");
      owl.owlCarousel({
        // Define custom and unlimited items depending from the width
        // If this option is set, itemsDeskop, itemsDesktopSmall, itemsTablet, itemsMobile etc. are disabled
        // For better preview, order the arrays by screen size, but it's not mandatory
        // Don't forget to include the lowest available screen size, otherwise it will take the default one for screens lower than lowest available.
        // In the example there is dimension with 0 with which cover screens between 0 and 450px
        //itemsCustom : [
         // [0, 2],
          //[450, 4],
          //[600, 7],
         // [700, 9],
         // [1000, 10],
         // [1200, 12],
         // [1400, 13],
         // [1600, 15]
       // ],
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

