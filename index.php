<!-- Jennifer Benesh -->
<!-- Rev 0 11/25/2018 -->
<html>
	<head>
		<title>ePortfolio Creator</title>
		<link rel="stylesheet" type="text/css" href="home_css.css">
	</head>
		<body>
			<div id="top">
			<h1 style="color: white; padding-left:5px;padding-bottom:0px">ePortfolio Creator</h1>
			</div>
			<div id="header">
				
				<p style="text-align:center;color:black; padding-top:100px">ePortfolio Made For You!<br><span style="font-size:30;">The simple ePortfolio creator that creates an ePortfolio for you!</span></p>
			
			</div>
			

			

			<div class="row">
			  <div class="column">
			    <h2 style="text-align:center">Benefits!</h2>
				<p style="text-align:center;">There are many benefits to having an ePortfolio. It helps in getting jobs, networking, and displaying your traits and knowledge. The ePortfolio makes you more accessible to other employers, which makes getting your information to other employers a lot easier.</p>
			  </div>
			  <div class="column">
			    <h2 style="text-align:center">No Coding Experience Needed!</h2>
				<p style="text-align:center;">Unfortunately, sometimes it is difficult to code your own ePortfolio site or it can be time consuming. This ePortfolio creator eliminates these obstacles and provides an organized ePortfolio specifically to you!</p>
			  </div>
			  <div class="column">
			    <h2 style="text-align:center">Get Started!</h2>
				<p style="text-align:center;">Click "Start My ePortfolio!" to start creating your customized ePortfolio!</p>

				<form name="submit" action="" method="post">
				<div style="display: flex;justify-content: center;">
				<button class="button" name="submit" type="submit"><span>Start my ePortfolio! </span></button>
				</div>

				<?php
				if(isset($_POST['submit'])){
				$files = glob('uploads/*'); // get all file names
				foreach($files as $file){ // iterate files
				  if(is_file($file))
				    unlink($file); // delete file
				

				}
				header("Location: /~beneshjs/User_Interface/project/enter_data_home.php");
				}
				//<input type="submit" value="Start my ePortfolio!" name="submit" />
				?>
			</form>
			  </div>
			</div>

			
		</body>
</html>