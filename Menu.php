<?php
session_start();
?>
<!DOCTYPE html> 

<html lang="en">
<head>
	<title>Master Grill- Menu</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <script src="js/jquery.js"></script> 
	<script src="js/jquery.glide.js"></script>
    
 
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/animate.css">
    <script type="text/javascript" src="js/MyJQ.js"></script>
    <script src="js/jquery.localScroll.min.js" type="text/javascript"></script>
	<script src="js/jquery.scrollTo.min.js" type="text/javascript"></script> 
    <script src="js/wow.min.js" type="text/javascript"></script>
    <script src="main.js"></script> 


<!-- scroll function -->
<script type="text/javascript">
$(document).ready(function() {
   $('#navigations').localScroll({duration:800});
});
</script>


<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>


</head>
<body>

<!--============ Navigation ============-->

<div class="headerwrapper">
	<div id="header" class="container">
        <div class="logo" style="line-height: 10px"> <a href="#"><img src="images/LOGO2.png" alt="logo" width="460" height="85"></a> </div> <!--end of Logo-->
        <nav>
            <ul id="navigations">
                <li><a href="#navigations">HOME</a></li>
                <li> <a href="#slider">ABOUT</a></li>
                <li><a href="#bestdishes">MENU</a></li>
                <li><a href="#contactus">CONTACT</a></li>
            </ul>
        </nav>
      </div> <!--end of header-->
</div> <!-- end of headerwrapper-->


<!--============ Contents of Page Menu ============-->



<!--============ MENU ============-->

<div class="panel panel-info" style="font-family:Economica-bold; margin-left: 80px; margin-right: 80px; line-height: 15px;background-color: blue; background:url(../images/www3.jpg);">
          <div class="panel-heading" style="text-align: center; font-size: 40px; color: white; background-color: white; background:url(../images/www3.jpg); line-height: 30px">Menu</div>
          <div class="panel-body">
            <div id="get_product" >
              <!--Here we get product jquery Ajax Request-->
            </div>
          </div>
          <div class="panel-footer">&copy; MASTERGRILL</div>
</div>


<!--============ COPYRIGHTS ============-->


<div class="copyrightswrapper">
    <div id="copyrights" class="container">
    
 	   <p style="text-align:center;">Copyright 2018 &copy; <a href="https://www.facebook.com/Mastergrillfw/"> MASTER GRILL(ITPM PROJECT)</a> All Rights Reserved</p>

    </div> <!-- end of copyrights-->
</div> <!-- end of website-->
	



<div class="fixedsocial">
<a href="https://www.facebook.com/Mastergrillfw/"><img src="images/facebook.png" width="20" height="20" alt="fb"> </a>
</div>

<script type="text/javascript">
    $('.sliderwrapper .slider').glide({
		autoplay: 7000,
		animationDuration: 3000,
		arrows: true,
		
		
	
		});
	
</script>
	
    <script type="text/javascript">
    $('.bestdisheswrapper .slider').glide({
		autoplay: false,
		animationDuration: 700,
		arrows: true,
		navigation:false,
		
		
	
		});
	
	
</script>
	
   
   

</body>

</html>