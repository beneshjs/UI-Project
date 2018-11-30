<!-- Jennifer Benesh -->
<!-- Rev 0 11/25/2018 -->
<html>
	<head>
		<title>ePortfolio Creator</title>
		<link rel="stylesheet" type="text/css" href="theme_choice_css.css">
        <link rel="stylesheet" type="text/css" href="enter_data_home.css">
		<script>
            function validateForm() {
            var text;
            var x = document.forms["rbutton"]["radio"].value;
            
            if (x == "") {
            text = '<span style="color:#ff0000;">*Please choose a theme</span><br><br>';
            document.getElementById("validate").innerHTML = text;
            }
            
            if (x != ""){
                return true;
            }
            return false;
    
            }
            function confirm_click()
            {
            return confirm("Are you sure you want to leave this page? You will lose all your data.");
            }
            function confirm_click1()
            {
            return confirm("Are you sure you want to leave this page? You will have to upload your files again.");
            }
        </script>
	</head>
		<body>
            <div id="top1">
            <h1 style="color: white; padding-left:5px;padding-bottom:0px">ePortfolio Creator</h1>
            </div>
            <ul class="breadcrumb">
              <li><a href="https://homepages.uc.edu/~beneshjs/User_Interface/project/index.php" onclick="return confirm_click();">Home</a></li>
              <li><a href="https://homepages.uc.edu/~beneshjs/User_Interface/project/enter_data_home.php" onclick="return confirm_click1();">Your Homepage</a></li>
              <li><a href="https://homepages.uc.edu/~beneshjs/User_Interface/project/enter_data_experience.php" onclick="return confirm_click1();">Your Experience Page</a></li>
              <li><a href="https://homepages.uc.edu/~beneshjs/User_Interface/project/enter_data_resume.php" onclick="return confirm_click1();">Your Resume and Contact Page</a></li>
              <li><a href="#">Choose Your Theme</a></li>
              <li></li>
            </ul>
            <div id="center_body" style="margin-right:25%;">
			<h1>Choose Your Theme</h1>
			<p>Every ePortfolio is different. They each contain different experiences that is unique to a person. Therefore, the design of the ePortfolio should have a little bit of uniqueness to it as well.</p>

			<p>Please choose a theme for your ePortfolio by clicking on one of the images below.</p>
            <form name="rbutton" action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" autocomplete="on">
            <div id="validate"></div>
            <label style="margin-right: 30px;">
            <input type="radio" name="radio" value="leather"><img src="/~beneshjs/User_Interface/project/images/leather.jpg" style="border-style: solid;border-width: thin;">
            </label>
            <label style="margin-right: 30px;">
            <input type="radio" name="radio" value="lavendar"><img src="/~beneshjs/User_Interface/project/images/lavendar.jpg" style="border-style: solid;border-width: thin;">
            </label>
            <label style="margin-right: 30px;">
            <input type="radio" name="radio" value="crystal"><img src="/~beneshjs/User_Interface/project/images/crystal.jpg" style="border-style: solid;border-width: thin;">
            </label>
            
            <br><br>
            <input type="submit" name="submit" value="Let's Go To Your New ePortfolio!"/>
            </form>
            
            <?php
            if (isset($_POST['submit'])) {
            if(isset($_POST['radio']))
            {
                $txt = "uploads/theme.txt"; 
                $fh = fopen($txt, 'w'); 
                $txt=htmlspecialchars($_POST['radio']); 
                file_put_contents('uploads/theme.txt',$txt."\n",FILE_APPEND); // log to data.txt 
                if ($_POST['radio']=="leather"){
                header("Location: /~beneshjs/User_Interface/project/created_homepage_leather.php");
                }
                if ($_POST['radio']=="lavendar"){
                header("Location: /~beneshjs/User_Interface/project/created_homepage_lavendar.php");
                }
                if ($_POST['radio']=="crystal"){
                header("Location: /~beneshjs/User_Interface/project/created_homepage_crystal.php");
                }
                exit();
                };
                fwrite($fh,$txt); // Write information to the file
                fclose($fh); // Close the file
            //echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value

            }
            
            
            ?>	
        

		</body>
</html>