<?php
  include("./header.php");
  
  $name = $_POST['name'];
  $mail = $_POST['mail'];
  $message = $_POST['message'];
  $v = $_POST['v'];
  
  $nachricht = "From: $name \r\nMail: $mail \r\nMessage: $message \r\nQR: $v\r\n";
  
  mail('jonas@boostnow.de', 'Bewerbung-Nachricht', $nachricht);
  
?>
	<div id="wrapper">
      <div class="headline">
	    <h1>Sendebestätigung</h1>
	  </div>
	  <div class="tile_big">
        <p>Vielen dank für Ihre Nachricht. Ich werde sie schnellstmöglich beantworten.</p>
	  </div>
	</div>
  </body>
</html>