<?php

error_reporting(E_ALL);
 ini_set('display_errors', 'on');

//include ('yoga.php');
include('db.php');

$db = new DB();

$routine_id = $_GET['routine_id'];


$sql = "SELECT * FROM routine 
		WHERE routine_id = $routine_id";

$results = $db->execute($sql);

$row = $results->fetch_assoc();

$routine_name = $row['routine_name'];





$sql = "SELECT * FROM routine_items, yoga_pose
		WHERE routine_items.pose_id = yoga_pose.pose_id AND 
		routine_id = '$routine_id'";

$results = $db->execute($sql);

$pose_list = "";


while ($row = $results->fetch_assoc()) {
	// print_r($row);

	$pose_list .= "<div class=\"main-content\">
			<h3><a href=\"\" id=\"pose_id\" class=\"topopup\">{$row['name']}</a></h3>
		
		<div class=\"Products\">
			<input type=\"hidden\" class=\"pose_id\">
			<img src={$row['img']}>
			<div class=\"Contents\"></div>
			<h4>{$row['category']}</h4>

		</div>
		</div>";
	
}
		

?>

<!doctype html>
<html>
<head>
    
 <meta charset="UTF-8">
 <link rel="stylesheet" href="showroutine.css">
 <link rel="stylesheet" type="text/css" media="screen" href="menu/css/simple_menu.css">

 <body>


 <div class="header">
  <div id="site_title"><img src="image/logo_big.png" alt=""></div>
  <!-- Dynamic Menu -->
  <ol id="menu" class="simple_menu simple_menu_css horizontal black_menu">
    <li><a href="yoga.php">Home</a></li>
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
	 
	<main class="main">

		<div class="title"><?php echo $routine_name ?></div>

		

		 <?php echo $pose_list ?>
	</main>

 </body>

 </head>
 </html>