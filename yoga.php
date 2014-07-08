<?php 

include 'get_poses.php';
    
?>

<!doctype html>
<html>
<head>
    
 <meta charset="UTF-8">
    
    <link rel="stylesheet" href="yoga.css">
    <link rel="stylesheet" href="pose.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.2/handlebars.min.js"></script>
    <script>var poses = <?php echo get_poses();?></script>
    <script type="text/javascript" src="main.js"></script>
    <script type="text/javascript" src="popup.js"></script>
    <script type="text/javascript" src="add.js"></script>


<!-- <link rel="stylesheet" type="text/css" media="screen" href="css/style.css"> -->
<link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen">
<script src="js/jquery.min.js"></script>
<script src="js/jquery.eislideshow.js"></script>
<script>
jQuery.noConflict()(function ($) {
    $('#ei-slider').eislideshow({
        animation: 'center',
        autoplay: true,
        slideshow_interval: 3000,
        titlesFactor: 0
    });
});
</script>


</head>

<body>

<div class="header">
  <div id="site_title"><img src="image/logo_big.png" alt=""></div>
  <!-- Dynamic Menu -->
  <ol id="menu" class="simple_menu simple_menu_css horizontal black_menu">
    <li><a href="index.html">Home</a></li>
    <li><a href="#">About us</a>
      <ol>
        <li><a href="portfolio.html">Portfolio</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="fullscreen-gallery.html">Fullscreen Gallery</a></li>
        <li><a href="cinema.html">Cinema</a></li>
        <li><a href="slider.html">Nivo Slider</a></li>
        <li><a href="columns.html">Columns</a></li>
        <li><a href="tabs.html">Tabs</a></li>
        <li><a href="photogrid.html">Photo Grid</a></li>
        <li class="last"><a href="image.html">Static Image</a></li>
      </ol>
    </li>
    <li class="last"><a href="news.html">Contacy us</a>
  </ol>
  <div class="clr"></div>
</div>
<div class="wrapper">
  <div id="ei-slider" class="ei-slider">
    <ul class="ei-slider-large">
      <li> <img src="img/thumbs/8.jpg" alt="">
        <div class="ei-title">
          <h2>Beautiful</h2>
          <h3>Moments</h3>
        </div>
      </li>
      <li> <img src="img/thumbs/16.jpg" alt="">
        <div class="ei-title">
          <h2>Passionate</h2>
          <h3>Yoga</h3>
        </div>
      </li>
      <li> <img src="img/thumbs/10.jpg" alt="">
        <div class="ei-title">
          <h2>Tranquility</h2>
          <h3>in blue</h3>
        </div>
      </li>
      <li> <img src="img/thumbs/14.jpg" alt="">
        <div class="ei-title">
          <h2>Vintage</h2>
          <h3>Beauty</h3>
        </div>
      </li>
      <li> <img src="img/thumbs/12.jpg" alt="">
        <div class="ei-title">
          <h2>Mystery</h2>
          <h3>Man</h3>
        </div>
      </li>
      <li> <img src="img/thumbs/13.jpg" alt="">
        <div class="ei-title">
          <h2>On the</h2>
          <h3>Mountain</h3>
        </div>
      </li>
      <li> <img src="img/thumbs/15.jpg" alt="">
        <div class="ei-title">
          <h2>Beauty of</h2>
          <h3>India</h3>
        </div>
      </li>
    </ul>
    <!-- ei-slider-large -->
    <ul class="ei-slider-thumbs">
      <li class="ei-slider-element">Current</li>
      <li><a href="#">Slide 1</a><img src="img/thumbs/8.jpg" alt=""></li>
      <li><a href="#">Slide 2</a><img src="img/thumbs/16.jpg" alt=""></li>
      <li><a href="#">Slide 3</a><img src="img/thumbs/10.jpg" alt=""></li>
      <li><a href="#">Slide 4</a><img src="img/thumbs/14.jpg" alt=""></li>
      <li><a href="#">Slide 5</a><img src="img/thumbs/12.jpg" alt=""></li>
      <li><a href="#">Slide 6</a><img src="img/thumbs/13.jpg" alt=""></li>
      <li><a href="#">Slide 7</a><img src="img/thumbs/15.jpg" alt=""></li>
    </ul>
    <!-- ei-slider-thumbs -->
  </div>
  <!-- ei-slider -->
</div>
<!-- wrapper -->


<!-- close container -->


<main class="main">

	<form name="myform" action="" method="POST">
		<div class="drp">
		<select class ="mydropdown" name="mydropdown">
		<option value="all">All</option>
		<option value="arm">Arm balance</option>
		<option value="backend">Backend</option>
		<option value="Balance">Balancing</option>
		<option value="forward">Forward band</option>
		<option value="inversion">Inversion</option>
		<option value="sideband">Sideband</option>
		<option value="twist">Twist</option>
		<option value="othes">Other</option>
		<option value="warmup-restorative">Warm up, Restorative</option>
		</select>
		</div>
	</form>

<aside>

	 <div class="bought"><h2>pose SEQUENCE</h2>
   <button class="removeAll"> Remove All</button><br><br>
	    <form action="routine.php" method="POST">
	    <input type="text" id="routine-name" name="routine_name">
	     <button class="savebtn" type="submit">Save</button>
      <ul class="cart"></ul>

	     
	     <input type="hidden" id="form-pose-id" name="pose_id">
	     <input type="hidden" id="form-user-id" name="user_id" value="1">	
	    </form>
	 </div>


</aside>


 <div class="holder">


</main>


 <script id="company-media-object" type="text/x-handlebars-template">

        {{#each this}}

			<div class="main-content">
				<h4><a href="" id="{{pose_id}}" class="topopup">{{name}}</a></h4>


				<div class="content-logged-details">

 				<div class="close"></div>
				<span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>
	 
				<div class="title">
			 	<h2><strong>details for</strong> <span id="lblEnglishName">{{name}}</span> <span id="lblSanskritName"></span>
        		</h2>
			</div>
			<div class="content-details">
				<div class="block-galery">
					<img src="{{img}}">
					<div id="details-galery">
						<ul>
	                        
							<li>
							    <a id="rpImages_hlnkImg_0" href="/yoga/jpg-big/Easy-Pose.jpg" class="selected">
							        <span class="number">1</span>
							        <span class="image-holder">
							        <img id="rpImages_imgPose_0" src="{{img}}" style="height:86px;width:86px;">
							        </span>
							    </a>   
							</li>

						</ul>
					</div>
				</div>
				<div class="content-text">
					<em id="htmlDifficulty" class="title green">Warm up-Restorative</em></br></br>
					
					<strong>Start Position:</strong></br>
					<p>Seated</p>
					
					<strong>Description:</strong><p>{{description}}</p>
					
	                <strong>Contraindication:</strong><p><li>{{risks}}</li></p>

	                <strong>Benefits:</strong><p></p><li>{{benifits}}</li><li><p></p>

					<!--<div class="button"><a href="#">Add pose to sequence</a></div>-->
				</li></div>
			</div>
		
	</div>

	<div class="loader"></div>
	<div id="backgroundPopup"></div>

		<div class="Products">
			<input type="hidden" class="{{pose_id}}">
			<img src="{{img}}">
			<div class="Contents"></div>
      <h4>{{category}}</h4>
				<button class="btn">Add</button>

		</div>
	</div>
	{{/each}}
   </script>

<div style="clear:both; height: 40px"></div>
<div id="footer">
  <div id="social_icons"> 
  <img src="img/icon_fb.png" alt="">
   <img src="img/icon_twitter.png" alt=""> 
   <img src="img/icon_in.png" alt=""> 
</div>
  <a href="#">  Theme by Rushita Patolia</a> 
  </div>
 

</body>
</html>