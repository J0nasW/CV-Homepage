<?php
  include("./header.php");
?>
	<div id="wrapper">
      <div class="headline">
	    <h1>Referenzen</h1>
	  </div>
	  
	  <div class="tile_big">
	    <div class="subline">
		  <div class="lang_icon"></div>
		  <h2>Sprachen</h2>
		</div>
		<div class="toggle_button" id="toggle_pc">
		  <div class="minus"></div>
		  <div class="plus"></div>
		</div>
		<div class="subtile_big">
		  <div class="subtile_content">
		    <div class="triangle"></div>
		    <h3>Sprachkenntnisse</h3>
			<div class="toggle_container">
			  <div class="content_item_fullw">
			    <img src="./img/lang/DE-min.png" alt="DE" />
			    <p class="item_title">Deutsch</p>
				<div class="item_bar_bg"><span>Muttersprache</span></div>
			  </div>
			  
			  <div class="content_item_fullw">
			    <img src="./img/lang/EN-min.png" alt="EN" />
			    <p class="item_title">Englisch</p>
				<div class="item_bar_bg"><span style="animation:2s expandWidth_75 1 forwards">fließend</span></div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  
	  <div class="tile_big">
	    <div class="subline">
		  <div class="pc_icon"></div>
		  <h2>Computer</h2>
		</div>
		<div class="toggle_button first">
		  <div class="minus"></div>
		  <div class="plus"></div>
		</div>
		<div class="subtile_big fist_tile">
		  <div class="subtile_content">
		    <div class="triangle"></div>
		    <h3>Softwarekenntnisse</h3>
			<div class="toggle_container">
			  <div class="content_item">
			    <img src="./img/cred/AdobeCC-min.png" alt="Adobe" />
			    <p class="item_title">Adobe Creative Cloud <?php echo $year; ?></p>
			    <p class="item_description">Ps, Lr, Id, Ai, Pr, Ae, Acrobat Pro</p>
			  </div>
			  <div class="content_item">
			    <img src="./img/cred/office-min.png" alt="MS Office" />
			    <p class="item_title">Microsoft Office <?php echo $year; ?></p>
			    <p class="item_description">Word, Excel, PowerPoint, Outlook</p>
			  </div>
			  <div class="content_item">
			    <img src="./img/cred/Autodesk-min.png" alt="Autodesk" />
			    <p class="item_title">Autodesk</p>
			    <p class="item_description">Fusion 360, Inventor Pro <?php echo $year; ?></p>
			  </div>
			  <div class="content_item">
			    <img src="./img/cred/latex-min.png" alt="LaTeX" />
			    <p class="item_title">LaTeX</p>
			    <p class="item_description">mit TexStudio-Editor</p>
			  </div>
			  <div class="content_item">
			    <img src="./img/cred/matlab-min.png" alt="MathWorks" />
			    <p class="item_title">MathWorks</p>
			    <p class="item_description">Matlab <?php echo $year; ?>a</p>
			  </div>
			  <div class="content_item">
			    <img src="./img/cred/wordpress-min.png" alt="Wordpress" />
			    <p class="item_title">Wordpress</p>
			    <p class="item_description">Webdesign und Plugins</p>
			  </div>
			</div>
		  </div>
		</div>
		<div class="toggle_button">
		  <div class="minus"></div>
		  <div class="plus"></div>
		</div>
		<div class="subtile_big">
		  <div class="subtile_content">
		    <div class="triangle"></div>
			<h3>Programmiersprachen</h3>
			<div class="toggle_container">
		      <div class="content_item">
			    <img src="./img/cred/c++-min.png" alt="C++" />
			    <p class="item_title">C/C++</p>
			    <p class="item_description"><?php echo experience('2016-07-01'); ?></p>
			  </div>
			  <div class="content_item">
			    <img src="./img/cred/HTML5-min.png" alt="HTML5" />
			    <p class="item_title">HTML 5</p>
			    <p class="item_description"><?php echo experience('2016-01-01'); ?></p>
			  </div>
			  <div class="content_item">
			    <img src="./img/cred/CSS3-min.png" alt="CSS3" />
			    <p class="item_title">CSS 3</p>
			    <p class="item_description"><?php echo experience('2016-01-01'); ?></p>
			  </div>
			  <div class="content_item">
			    <img src="./img/cred/php-min.png" alt="PHP7" />
			    <p class="item_title">PHP 7</p>
			    <p class="item_description"><?php echo experience('2017-01-01'); ?></p>
			  </div>
			  <div class="content_item">
			    <img src="./img/cred/python.png" alt="CSS3" />
			    <p class="item_title">Python</p>
			    <p class="item_description"><?php echo experience('2017-06-01'); ?></p>
			  </div>
			  <div class="content_item">
			    <img src="./img/cred/matlab.png" alt="PHP7" />
			    <p class="item_title">MatLab Script</p>
			    <p class="item_description"><?php echo experience('2016-03-01'); ?></p>
			  </div>
			  <div class="additional_interest">
			    <p>Weitere Interessen: 
					<img src="./img/cred/raspi-min.png" alt="raspi" title="Raspberry Pi"/>
					<img src="./img/cred/Arduino-min.png" alt="arduino" title="Arduino"/>
					<img src="./img/cred/iot.png" alt="IoT" title="IoT"/>
					<img src="./img/cred/losant.png" alt="Losant IoT" title="Losant IoT"/>
					<img src="./img/cred/mongoose_os.png" alt="Mongoose OS IoT" title="Mongoose OS IoT"/>
					<img src="./img/cred/amazon_aws.png" alt="Amazon Web Services" title="Amazon Web Services"/></p>
					
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  
	  <div class="tile_big">
	    <div class="subline">
		  <div class="pc_icon"></div>
		  <h2>Interessen</h2>
		</div>
		<div class="toggle_button" id="toggle_pc">
		  <div class="minus"></div>
		  <div class="plus"></div>
		</div>
		<div class="subtile_big">
		  <div class="subtile_content">
		    <div class="triangle"></div>
		    <h3>Sport</h3>
			<div class="toggle_container">
			  <div class="content_item">
			    <img src="./img/cred/golf.png" alt="golf" />
			    <p class="item_title">Golf</p>
			    <p class="item_description">Hcp: 17,1 Club: <a href="http://www.gctw.de/" target="_blank" style="color:#3F51B5;">GCTW</a></p>
			  </div>
			  <div class="content_item">
			    <img src="./img/cred/tennis.png" alt="tennis" />
			    <p class="item_title">Tennis</p>
			    <p class="item_description">Beginner</p>
			  </div>
			  <div class="content_item">
			    <img src="./img/cred/fitness.png" alt="functional training" />
			    <p class="item_title">Functional Training</p>
			    <p class="item_description">Spezifisches Fitness Programm</p>
			  </div>
			  <div class="content_item">
			    <img src="./img/cred/sail.png" alt="sailing" />
			    <p class="item_title">Segeln</p>
			    <p class="item_description">Segelschein und SBF See</p>
			  </div>
			</div>
		  </div>
		</div>
		<div class="toggle_button" id="toggle_pc">
		  <div class="minus"></div>
		  <div class="plus"></div>
		</div>
		<div class="subtile_big">
		  <div class="subtile_content">
		    <div class="triangle"></div>
		    <h3>Hobbys</h3>
			<div class="toggle_container">
			  <div class="content_item">
			    <img src="./img/cred/dslr.png" alt="dslr" />
			    <p class="item_title">Foto & Video</p>
			    <p class="item_description">Aufnahme und Bearbeitung</p>
			  </div>
			  <div class="content_item">
			    <img src="./img/cred/drone.png" alt="drone" />
			    <p class="item_title">Drohnen & GoPro</p>
			    <p class="item_description"><a href="https://vimeo.com/user23455425" target="_blank" style="color:#3F51B5;">Vimeo-Profil</a></p>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	  
	  <div class="headline">
	    <a href="index.php">Zurück zur Startseite</a>
		<p></p>
	  </div>
	  
	</div>
  </body>
</html>