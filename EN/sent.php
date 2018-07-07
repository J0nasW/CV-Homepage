<?php
  include("./header.php");
  
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $message = $_POST['message'];
  $v = $_POST['v'];
  
  $nachricht = "From: $name \r\nMail: $mail \r\nMessage: $message \r\nQR: $v\r\n";
  
  mail('jonas@boostnow.de', 'Bewerbung-Message-EN', $nachricht);
  
?>
	<div id="wrapper">
      <div class="headline">
	    <h1>Success.</h1>
	  </div>
	  <div class="tile_big">
        <p>Thank you for your message. I will reply soon.</p>
	  </div>
	</div>
  </body>
</html>