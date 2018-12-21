<!DOCTYPE html>
<html>
<head>

<title>The Rain Tree Hotel</title>

<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0,user-scalable=no,maximum-scale=1" media="(device-height: 568px)">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="HandheldFriendly" content="True">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!-- Style Sheets -->
<link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
<link rel="stylesheet" type="text/css" media="all" href="css/trunk.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">

    
<!-- Scripts -->
<script type="text/javascript">
	if (typeof jQuery == 'undefined')
		document.write(unescape("%3Cscript src='js/jquery-1.9.js'" +
															"type='text/javascript'%3E%3C/script%3E"))
</script>
<script type="text/javascript" language="javascript" src="js/trunk.js"></script>
<script type="text/javascript" language="javascript" src="js/index.js"></script>
</head>
 
<body>

<div class="container">

	<header class="slide">
		<div class="s-media">
			<div class="footer-social-icons">
	    <ul class="social-icons">
	        <li><a href="" class="social-icon"> <i class="fa fa-facebook"></i></a></li>
	        <li><a href="" class="social-icon"> <i class="fa fa-twitter"></i></a></li>
	        <li><a href="" class="social-icon"> <i class="fa fa-instagram"></i></a></li>
	        <li><a href="" class="social-icon"> <i class="fa fa-youtube"></i></a></li>
	        <li><a href="" class="social-icon"> <i class="fa fa-linkedin"></i></a></li>
	        <li><a href="" class="social-icon"> <i class="fa fa-google-plus"></i></a></li>
	    </ul>
			<p>| &nbsp;&nbsp; Call us : <a href="tel:+94472238125">
				(+94) 047 223 8125</a></p>
</div>
</div>
	<!--	<h1>The Rain Tree Hotel</h1>  	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
		<ul id="navToggle" class="burger slide">    <!--	Add "slideRight" class to items that move right when viewing Nav Drawer  -->
            <li></li><li></li><li></li>
		</ul>
        <h1 id="h1">
       
        </h1>
	</header>
	<img src="img/big-logo.png" class="logo1"/>

	<nav class="slide fill">
		<ul>
			<li><a href="./" id="active" class="active">HOME</a></li>
			<li><a href="#">ABOUT US</a></li>
			<li><a href="#">RESTAURANT</a></li>
			<li><a href="#">WEDDING HALL</a></li>
			<li><a href="#">GALLERY</a></li>
			<li><a href="#">ROOF TOP</a></li>
            <li><a href="#">THINGS TO DO</a></li>
            <li><a href="#">OFFERS</a></li>
            <li><a href="#">ACCOMMODATION</a></li>
            <li><a href="#">CONTACT US</a></li>
            
		</ul>
	</nav>
</div>

<script type="text/javascript">

   var MyDiv2 = document.getElementById('h1');
   var MyDiv1 = document.getElementById('active');
   MyDiv2.innerHTML = MyDiv1.innerHTML;

</script>
	<div class="content slide">    
		<ul class="responsive">
			<li class="header-section">
				<div class="placefiller">
                    
					<div class="pic-wrapper">
                        
                        <figure class="pic-1"></figure>
                        <figure class="pic-2"></figure>
                        <figure class="pic-3"></figure>
                        <figure class="pic-4"></figure>
                    </div>
                    
                </div>
                
            </li>
        </ul>   

    </div>
    <div>
    <div class="body-content content wrapper">
        

<ul class="cards">
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--fence"></div>
      <div class="card__content">
        <div class="card__title">Flex</div>
        <p class="card__text">This is the shorthand for flex-grow, flex-shrink and flex-basis combined. The second and third parameters (flex-shrink and flex-basis) are optional. Default is 0 1 auto. </p>
        <button class="btn btn--block card__btn">Explore More</button>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--river"></div>
      <div class="card__content">
        <div class="card__title">Flex Grow</div>
        <p class="card__text">This defines the ability for a flex item to grow if necessary. It accepts a unitless value that serves as a proportion. It dictates what amount of the available space inside the flex container the item should take up.</p>
        <button class="btn btn--block card__btn">Explore More</button>
      </div>
    </div>
  </li>
  <li class="cards__item">
    <div class="card">
      <div class="card__image card__image--record"></div>
      <div class="card__content">
        <div class="card__title">Flex Shrink</div>
        <p class="card__text">This defines the ability for a flex item to shrink if necessary. Negative numbers are invalid.</p>
        <button class="btn btn--block card__btn">Explore More</button>
      </div>
    </div>
  </li>
  
</ul>
  
        </div>
    
<footer class="footer">
	<img src="./img/logo.png" class="logo-bottom"/>
    <div class="copyright">All copyrights reserved by The Rain tree hotel - Thissamaharama - © <?php echo date("Y");?> | <a href="">Terms And condions </a> | <a href="">Site map</a>

</div>
    <div class="devaloper">Website Designed & Developed by <a href="http://unkdvt.com">unkdvt.com</a></div>
</footer>
</div>
</body>
</html>
