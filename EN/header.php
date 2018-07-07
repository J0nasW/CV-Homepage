<?php
  $year = date("Y");
  
  function experience($date){
	  $datetime1=date_create("now");
	  $datetime2=date_create($date);
	  $int=date_diff($datetime1,$datetime2);
	  $exp_m = $int->format('%m');
	  $exp_y = $int->format('%y');
	  if($exp_y > 2){
		  $format = "Jahre";
		  $exp = $int->format('%y');
	  }else if($exp_m != 1){
		  $format = "Monate";
		  $exp = $int->format('%m');
	  }else{
		  $format = "Monat";
		  $exp = $int->format('%m');
	  }
	  return $exp." ".$format." Erfahrung";
  }
  
  $file = "./visit.txt";
  
  $ip = $_SERVER['REMOTE_ADDR'];
  $pip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  $qr = $_GET['v'];
  $time = date("Y-m-d H:i:s");
  
  $content = "IP: $ip ## PIP: $pip ## QR: $qr ## Time: $time\r\n";
  
  file_put_contents($file, $content, FILE_APPEND | LOCK_EX);
  
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="./../css/style.css" media="screen" />
	
	<script type="text/javascript" src="./../js/jquery.min.js"></script>
	<script type="text/javascript" src="./../js/slideup.js"></script>
	<script type="text/javascript" src="./../js/toggle.js"></script>
	<script type="text/javascript" src="./../js/augment.js"></script>  
	
    <title>Jonas Wilinski</title>
	<link rel="icon" href="/img/favicon.ico" type="image/png">
  </head>
  <body>
    <div id="slideup"></div>
	<div id="blackout"></div>
	<div id="augment"><div class="close_btn"></div></div>
	<div id="contact"><div class="close_btn"></div></div>
	<div id="navigation">
	  <div class="profile_picture"></div>
	  <div class="profile_name">
	    <a href="index.php">Jonas Wilinski</a>
	  </div>
	  <div class="profile_job">
	    <p>Student CAU Kiel</p>
	  </div>
	  <div class="links">
	    <ul>
		  <li>
		    <a href="index.php">Home</a>
		  </li>
		  <li>
		    <a href="cv.php" class="mid">Curriculum Vitae</a>
		  </li>
		  <li>
		    <a href="credentials.php">References</a>
		  </li>
		</ul>
	  </div>
	  <div class="contact">
	    <a href="contact.php">Contact</a>
	  </div>
	  <div class="copyright">
	    <p>© Jonas Wilinski</p>
	  </div>
	</div>
	<div id="navigation_mobile">
	  <div id="navigation_mobile_icons">
	    <div class="profile_picture"></div>
		<div class="language mobile">
	      <a href="http://bewerbung.boostnow.de/<?php echo $lang;?>"><img src="./img/lang/DE-min.png" alt="de" /></a>
	    </div>
	    <div id="toggle_nav"></div>
	  </div>
	  <div id="navigation_mobile_content">
	    <div class="links">
	      <ul>
		    <li>
		      <a href="index.php">Home</a>
		    </li>
	  	    <li>
	  	      <a href="cv.php">Curriculum Vitae</a>
	  	    </li>
	  	    <li>
	  	      <a href="credentials.php" class="last">References</a>
	  	    </li>
			<li>
	  	      <a href="contact.php" class="last">Contact</a>
	  	    </li>
	  	  </ul>
	    </div>
	  </div>
	</div>
	
	<div class="language desktop">
		<a href="http://bewerbung.boostnow.de/<?php echo $lang;?>"><img src="./img/lang/DE-min.png" alt="de" /></a>
	</div>