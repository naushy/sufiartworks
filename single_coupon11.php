<?PHP ob_start();
require_once "lib/clsSocialLikeLocker.php";
 ?>
<?PHP
$oLocker = new clsSocialLikeLocker();
$share_url = clsSocialLikeLocker::getCurrentURL();
$isLiked = $oLocker->isLiked($share_url);
?>
<!DOCTYPE HTML>

<head>

       <title>SufiArtworks.com| Ishaque Ahmed </title>
      <meta name="description" content="classic sufi, art, painting, calligraphy, arabic, persian, urdu, gallery">
    <meta name="keywords" content="classic sufi, art, painting, calligraphy, arabic, persian, urdu, gallery">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
<!-- Google Fonts -->

    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>

<!-- CSS Files -->

    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="boxes/css/style6.css" />

<!-- JS Files -->

	<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="http://connect.facebook.net/en_US/all.js#xfbml=1" /></script>
    <script type="text/javascript" src="assets/events.js" /></script>

</head>

<body>

    <div class="header">
    
    <div id="site_title"><a href="index.html"><img src="img/logo.png" /></a></div>

    <!-- Main Menu -->
    
     <ol id="menu">
             <li class="active_menu_item"><a href="product_viewer.html">Home</a>
 <li><a href="About.html">About Artist</a>             
 <li><a href="nivo.html">Art Gallery - Nivo Slider</a>
        
        <li><a href="ei_slider.html">Art Gallery - EI Slider</a></li>
              
        <li><a href="fullscreen_gallery.html">Art Gallery - Fullscreen Slider</a>
                
               <li><a href="index.html">Art Gallery -Coupon View</a></li>
<li><a href="contact.html">Contact</a></li>
    </ol>
    
    </div><!-- END header -->


    <div id="container">


<div class="two-third">

        <div class="coupon_content">
        
        
        <img title="" src="img/masonry/11.jpg" alt="" style="float:left; margin-right: 20px" />
        
        <h2 style="margin-top:0; margin-bottom:5px">Resetting of Evening Sun</h2>
      
        
        <p><strong>Description:</strong> Inspired by the surroundings of sun city, use of warm color is extinsively used in expression of the famous islamic mythological incidence of Hazrat ALI RA where Prohpet Muhammad is known to have prayed to Allah to make the sun rise once back after the sunset just by a gesture of his finger.        </p>
        
        <p style="font-weight:bold">Price: $ 1000 | Coupon Price: $ 800 </p>
        
        <!-- PHP Coupong Code -->
        
  <input type="hidden" id="url_request" value="unlock_handler.php?url=<?PHP echo urlencode($share_url); ?>" />
           
        
	  <?PHP if($isLiked == true): ?>
      
          <div style="background: #690; color: #FFF; padding: 10px 10px 20px; margin-bottom: 5px; border-radius: 5px; text-align: center; font-weight: bold; float: right; width: 268px">
             <p>Coupon Code: </p> <p style="font-size: 1.8em; padding-bottom: 20px">
             <?php // Generate a random number
			        echo mt_rand(2100, 2200); ?>
             </p>
          </div>
             
          <div style="margin-top: 15px; text-align:right">
          
      <?PHP else: ?>
      
          <div style="background:#F00; color: #FFF; padding: 10px 10px 20px; border-radius: 5px; text-align: center; font-weight: bold; float: right; width: 268px">
             <p><span style="font-style:italic">Hit the Like to get coupon code</span></p>
          
      <?PHP endif; ?>
      
      
       <!-- Share Buttons -->
       
        <div title="Like on Facebook"> 
          <fb:like href="http://www.facebook.com/ishaqueart42" layout="box_count" action="like" font="arial" show_faces="true" width="48" height="65"></fb:like> 
        </div> 
     
        </div> <!-- END PHP Coupon Code -->
        
       <div style="clear:both"></div>
        </div> <!-- END Coupon content box -->
        
        
        
        <h2>Some general info about the seller</h2>
        
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur ipsum eros, mattis vel iaculis vel, viverra ac augue. Morbi diam nulla, porta in feugiat sed, adipiscing et risus.</p>
           
        
        
        




</div><!-- close two third -->


      <div class="sidebar_right">
      
      <h3 style="margin-top:0">About Artist</h3>
      
      <div id="coupon_seller_info">
               <p>    Chhami ka dhada <br />
          Near Raj-Mahal Girls Higher Sec. School <br />
          Jodhpur (Rajasthan), INDIA<br /><br />
          Mob: (+91) 94 610 88 691<br />
       <span id="phonein">  mail: ishaque@sufiart.ga, ishaqueart42@gmail.com </span>
          </p>  
            <li><a href="http://www.hunar.ga" title="website">Ishaque Ahmed </a></li>
<li><a href="http://www.facebook.com/ishaqueart42" title="website">Facebook</a></li>
          </ul>
      </div>
      
      <h3>Map</h3>
      
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3576.884072598938!2d73.02631795!3d26.297857899999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418db0721ea413%3A0x825b184d3c4bfbea!2sRaj+Mahal+School!5e0!3m2!1sen!2sin!4v1433700615694" width="400" height="400" frameborder="0" style="border:0"></iframe>
<br /><small><a href="http://www.google.co.in/maps/place/Gulab+Sagar,+Jodhpur,+Rajasthan+342001/@26.2981878,73.0264272,18z/data=!4m2!3m1!1s0x39418dba86fd39e1:0x766bf37d2f29168e!6m1!1e1">Jodhpur</a></small>
 
      
      
      
      </div><!-- end sidebar right -->
   
      <div style="clear:both; height: 40px"></div>
      
</div><!-- end container -->


    <div id="footer">

    <!-- First Column -->

    <div class="one-fourth">
        <h3>Special Thanks -</h3>
            <ul class="footer_links">
                <li><a href="#">Endorsements</a></li>
            </ul>
    </div>
    
    <!-- Second Column -->
    
    <div class="one-fourth">
        <h3>Terms</h3>
            <ul class="footer_links">
                <li><a href="#">Please Read Carefully</a></li>
            </ul>
    </div>
    
    <!-- Third Column -->
    
    <div class="one-fourth">
        <h3>Description</h3>
        Ishaque Ahmed is famous artist from Suncity(Jodhpur, Rajasthan). 
         Paintings, Photography(Macro & Micro), Serigraphy, Calligraphy and Philosophy are areas of his expertise.
        
           
    </div>
    
    <!-- Fourth Column -->
    
    <div class="one-fourth last">
        <h3>Socialize</h3>
        <a href="http://facebook.com/ishaqueart"><img src="img/icon_fb.png" alt="Facebook"></a>
            <a href="http://facebook.com/ishaqueart"><img src="img/icon_twitter.png" alt="Facebook"></a>
            <a href="http://facebook.com/ishaqueart"><img src="img/icon_in.png" alt="Facebook"></a>
    </div>

    <div style="clear:both"></div>
     <div id="social_icons" align="center"></br>Copyright &copy; 2016. All Rights Reserved </br>SufiArtworks.com by <a>Ishaque Ahmed </a>
          </div>
    </div> <!-- END footer -->

<h4 align="center"> <a href="http://www.nausheen.tk">Webmaster</a></h4>


</body>
</html>