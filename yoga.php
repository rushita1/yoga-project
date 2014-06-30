<?php 


include 'get_pose.php';
    
?>

<!doctype html>
<html>
<head>
    
 <meta charset="UTF-8">
    
    <link rel="stylesheet" href="yoga.css">
    <link rel="stylesheet" href="pose.css">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="main.js"></script>
    <script type="text/javascript" src="popup.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.2/handlebars.min.js"></script>
   <script>var poses = <?php echo get_poses();?></script>

</head>

<body>

	 <header>
	  
	    <div id="menubar">
          <ul id="nav">
            <li class="current"><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div><!--close menubar-->	
      
     </header>


<main>

	<form name="myform" action="" method="POST">
		<div class="drp">
		<select name="mydropdown">
		<option value="all">All</option>
		<option value="arm">Arm balance</option>
		<option value="backend">Backend</option>
		<option value="balance">Balancing</option>
		<option value="forward">Forward band</option>
		<option value="inversion">Inversion</option>
		<option value="sideband">Sideband</option>
		<option value="twist">Twist</option>
		<option value="othes">Other</option>
		<option value="warmup">Warm up, Restorative</option>
		</select>
		</div>
	</form>

<aside>

	<div class="main-contentX">
		<h3>Pose Name</h3>


		<div class="Products">
			<img src="img/yoga.jpg" alt="">
			<div class="Contents"></div>
				<button class="btn">Remove</button>
			<h3>Category</h3>

		</div>

</aside>


 <div class="holder">


	<div class="main-content pose">
		<h3>Pose Name</h3>
	

		<div class="Products">
			<img src="img/yoga.jpg" alt="">
			<div class="Contents"></div>
				<button class="btn">Add</button>
			<h3>Category</h3>

		</div>
	</div>


 	<div class="close"></div>
    <span class="ecs_tooltip">Press Esc to close <span class="arrow"></span></span>


	<div class="main-content pose">
		<h3>Pose Name</h3>


		<div class="Products">
			<img src="img/yoga.jpg" alt="">
			<div class="Contents"></div>
				<button class="btn">Add</button>
			<h3>Category</h3>

		</div>
	</div>

	<div class="main-content pose">
		<h3>Pose Name</h3>


		<div class="Products">
			<img src="img/yoga.jpg" alt="">
			<div class="Contents"></div>
				<button class="btn">Add</button>
			<h3>Category</h3>

		</div>
	</div>

 </div>
</main>


<footer>
	  <a href="#">Home</a> |
	  <a href="#">About us</a> |
	  <a href="#">Contact</a>
	  <br/><br/>
	  <a href="http://fotogrph.com">Images</a> 
</footer>

 <script id="company-media-object" type="text/x-handlebars-template">

        {{#each this}}

			<div class="main-content">
				<h3><a href="" id="{{pose_id}}" class="topopup">{{name}}</a></h3>


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

	                <strong>Benefits:</strong><p></p><li>benefits</li><li><p></p>

					<!--<div class="button"><a href="#">Add pose to sequence</a></div>-->
				</li></div>
			</div>
		
	</div>

	<div class="loader"></div>
	<div id="backgroundPopup"></div>


		<div class="Products">
			<img src="{{img}}">
			<div class="Contents"></div>
				<button class="btn">Add</button>
			<h3>{{category}}</h3>

		</div>
	</div>
	{{/each}}
   </script>
</body>
</html>