<?php
  include("./header.php");
?>
	<div id="wrapper">
      <div class="headline">
	    <h1>Kontakt</h1>
	  </div>
	  <div class="tile_big">
        <p>With this Formula, you can send me a Message.</p>
		<form method="post" action="sent.php">
		  <input type="text" name="name" placeholder="Name" required />
		  <input type="email" name="mail" placeholder="Email" required />
		  <textarea cols="50" rows="5" name="message" placeholder="Nachricht" required></textarea>
		  <input type="hidden" name="v" value="<?php echo $v;?>" />
		  <input type="submit" value="Senden">
		</form>
	  </div>
	  
	  <div class="headline">
	    <a href="index.php">Zurück zur Startseite</a>
		<p></p>
	  </div>
	  
	</div>
  </body>
</html>