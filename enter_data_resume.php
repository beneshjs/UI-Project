<!-- Jennifer Benesh -->
<!-- Rev 0 11/25/2018 -->
<html>
	<head>
		<title>ePortfolio Creator</title>
        <link rel="stylesheet" type="text/css" href="enter_data_home.css">
         <script>
            function validateForm() {
            var text;
            var x = document.forms["Upload"]["phonenumber"].value;
            var y = document.forms["Upload"]["email"].value;
            
            if (x == "") {
            text = '<span style="color:#ff0000;">*Required Field</span>';
            document.getElementById("validate").innerHTML = text;
            }
            else {
            text = "";
            document.getElementById("validate").innerHTML = text;
            }
            if (y == "") {
            text = '<span style="color:#ff0000;">*Required Field</span>';
            document.getElementById("validate1").innerHTML = text;
            }
            else {
            text = "";
            document.getElementById("validate1").innerHTML = text;
            }
            if (x != "" && y != ""){
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
              <li><a href="#">Your Resume and Contact Page</a></li>
              <li></li>
            </ul>
            <div id="center_body" style="margin-left: 30%;">
			<h1>Your Resume and Contact Page</h1>
			<p>Please upload your resume and fill out the text fields below.</p>
            <?php
if(isset($_POST['Upload'])){ //check if form was submitted
$target_dir = "uploads/";

function findexts ($filename) 
 { 
 $filename = strtolower($filename) ; 
 $exts = split("[/\\.]", $filename) ; 
 $n = count($exts)-1; 
 $exts = $exts[$n]; 
 return $exts; 
 } 

  $ext = findexts ($_FILES['fileToUpload']['name']) ; 

$target_file = $target_dir .  'resume.' . $ext;
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    echo getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        echo "<br>";
        $uploadOk = 1;
    } else {
        echo '<span style="color:#ff0000;">*File is not an image. Please upload an image.</span><br>';
        echo "<br>";
        $uploadOk = 0;
    }
}
// check if file is empty
if(!file_exists($_FILES['fileToUpload']['tmp_name']) || !is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
    echo '<span style="color:#ff0000;">*File was not uploaded. Please upload a file and try again.</span><br>';
    echo "<br>";
}
// Check if file already exists
/*elseif (file_exists($target_file)) {
    echo "File already exists. Please rename your file and try again.";
    $uploadOk = 0;
}*/
// Check file size
elseif ($_FILES["fileToUpload"]["size"] > 50000000000) {
    echo '<span style="color:#ff0000;">*Your file is too large. Please upload an image of a smaller size.</span><br>';
    echo "<br>";
    $uploadOk = 0;
}
// Allow certain file formats
elseif($imageFileType != "pdf") {
    echo '<span style="color:#ff0000;">*Only PDF files are allowed.</span><br>';
    echo "<br>";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
elseif ($uploadOk == 0) {
    echo '<span style="color:#ff0000;">*There was an error uploading your file. Please try again.</span><br>';
    echo "<br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        header("Location: /~beneshjs/User_Interface/project/theme_choice.php");
    } else {
        echo '<span style="color:#ff0000;">*There was an error uploading your file. Please try again.</span><br>';
        echo "<br>";
    }
}
}
                function checkExists($input) {
                    if(file_exists('uploads/contact.txt')) {
                    $file = file_get_contents('uploads/contact.txt');
                    $brokenfile = explode(PHP_EOL, $file);
                    switch($input) {
                        case 'phonenumber':
                            return $brokenfile[0];
                            break;
                        case 'email':
                            return $brokenfile[1];
                            break;
                        default:
                            break;
                    }
                }
                else{
                    return $_POST[$input];
                }
            }

?>

            <form name="Upload" action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" autocomplete="on">

            Upload a PDF of your resume:<br><br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br><br>


			Phone Number:<br>
			<input type="text" name="phonenumber" value="<?php echo checkExists('phonenumber'); ?>"><br>
            <div id="validate"></div><br>
            
			Email Address:<br>
			<input type="text" name="email" value="<?php echo checkExists('email'); ?>"><br>
            <div id="validate1"></div><br>

  			<input type="submit" value="Next" name="Upload">

            <?php
                
                if (isset($_POST['phonenumber']) && isset($_POST['email'])) { // check if both fields are set
                $txt = "uploads/contact.txt"; 
                $fh = fopen($txt, 'w'); 
                $txt=htmlspecialchars($_POST['phonenumber'])."\n".htmlspecialchars($_POST['email']); 
                file_put_contents('uploads/contact.txt',$txt."\n",FILE_APPEND); // log to data.txt 
                exit();
                };
                fwrite($fh,$txt); // Write information to the file
                fclose($fh); // Close the file
                //rename('data.txt', 'uploads/data.txt');
            ?>
    		

			</form></div><br><br>
			
		</body>
</html>
