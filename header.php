<?php
  $year = date("Y");
  $month = date("m");
  
  function experience($date){
	  $datetime1=date_create("now");
	  $datetime2=date_create($date);
	  $int=date_diff($datetime1,$datetime2);
	  $exp_m = $int->format('%m');
	  $exp_y = $int->format('%y');
	  $exp_ym = ($exp_y * 12) + $exp_m;
	  if($exp_ym > 24){
		  $format = "Jahre";
		  $exp = $int->format('%y');
	  }else if($exp_m != 1){
		  $format = "Monate";
		  $exp = $exp_ym;
	  }else{
		  $format = "Monat";
		  $exp = $int->format('%m');
	  }
	  return $exp." ".$format." Erfahrung";
  }
  
  
  
?>

<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" type="text/css" href="./css/style.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="./css/timeline.css" media="screen" />
	
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/slideup.js"></script>
	<script type="text/javascript" src="./js/toggle.js"></script>
	<script type="text/javascript" src="./js/augment.js"></script>  
	<script type="text/javascript" src="./js/download.js"></script>
	<script type="text/javascript" src="./js/modernizr.js"></script>
	
    <title>Jonas Wilinski</title>
	<link rel="icon" href="/img/favicon.ico" type="image/png">
	<link rel="shortcut icon" type="image/x-icon" href="./img/favicon.ico">
  </head>
  <body>
  
	<!--Self programmed by Jonas Wilinski - Hosted on my SharedServer at 1&1 - boostnow.de-->
  
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
		    <a href="cv.php" class="mid">Lebenslauf</a>
		  </li>
		  <li>
		    <a href="credentials.php">Referenzen</a>
		  </li>
		</ul>
	  </div>
	  <div class="contact">
	    <a href="contact.php">Kontakt</a>
	  </div>
	  <div class="copyright">
	    <p>© Jonas Wilinski | <a href="./download.php">Download Center</a> | <a href="./about.php">Über diese Seite</a></p>
	  </div>
	</div>
	<div id="navigation_mobile">
	  <div id="navigation_mobile_icons">
	    <div class="profile_picture"></div>
		<div class="language mobile">
	      <a href="http://application.boostnow.de/<?php echo $lang;?>"><img src="./img/lang/EN-min.png" alt="en" /></a>
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
	  	      <a href="cv.php">Lebenslauf</a>
	  	    </li>
	  	    <li>
	  	      <a href="credentials.php" class="last">Referenzen</a>
	  	    </li>
			<li>
	  	      <a href="contact.php" class="last">Kontakt</a>
	  	    </li>
	  	  </ul>
	    </div>
	  </div>
	</div>
	
	<div class="language desktop">
		<a href="http://application.boostnow.de/<?php echo $lang;?>"><img src="./img/lang/EN-min.png" alt="eng" /></a>
	</div>
	<a href="contact.php" id="contact_link"></a>