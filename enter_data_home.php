<!-- Jennifer Benesh -->
<!-- Rev 0 11/25/2018 -->
<html>
	<head>
		<title>ePortfolio Creator</title>
        <link rel="stylesheet" type="text/css" href="enter_data_home.css">
         <script>
            function validateForm() {
            var text;
            var x = document.forms["Upload"]["firstname"].value;
            var y = document.forms["Upload"]["lastname"].value;
            var z = document.forms["Upload"]["description"].value;
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
            if (z == "") {
            text = '<span style="color:#ff0000;">*Required Field</span>';
            document.getElementById("validate2").innerHTML = text;
            }
            else {
            text = "";
            document.getElementById("validate2").innerHTML = text;
            }
            if (x != "" && y != "" && z != ""){
                return true;
            }
            return false;
    
            }

            function confirm_click()
            {
            return confirm("Are you sure you want to leave this page? You will lose all your data.");
            }
            /*function readfileautomatically() {
            var client = new XMLHttpRequest();
            client.open('GET', '/~beneshjs/User_Interface/project/uploads/data.txt');
            client.onerror = function(){
               document.getElementById("first_name").value = "";
                document.getElementById("last_name").value = "";
                document.getElementById("description1").value = "";
            }
            client.onreadystatechange = function()
            {
                if( client.responseText != '' )
                {
                    var txt = client.responseText.split("\n");
                   
                    if(txt[0].length > 0 && txt[1].length > 0 && txt[2].length > 0) {
                        document.getElementById("first_name").value = txt[0];
                        document.getElementById("last_name").value = txt[1];
                        document.getElementById("description1").value = txt[2];
                        
                        
                    }
                    
                }

            }
            client.send();
            }*/
         </script>
         <style>
        .tooltip {
            position: relative;
            display: inline-block;
            border-bottom: none;
        }

        .tooltip .tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: black;
            color: #fff;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            bottom: 150%;
            left: 50%;
            margin-left: -60px;
        }

        .tooltip .tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: black transparent transparent transparent;
        }

        .tooltip:hover .tooltiptext {
            visibility: visible;
        }
        </style>
	</head>
		<body onload="">
            <div id="top1">
            <h1 style="color: white; padding-left:5px;padding-bottom:0px">ePortfolio Creator</h1>
            </div>
            <ul class="breadcrumb">
              <li><a href="https://homepages.uc.edu/~beneshjs/User_Interface/project/index.php" onclick="return confirm_click();">Home</a></li>
              <li><a href="#">Your Homepage</a></li>
              <li></li>
            </ul>
            <div id="center_body">
            <h1>Your Home Page</h1>
			<p>Please fill out the text fields below.</p>
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
             
             //This applies the function to our file  
             $ext = findexts ($_FILES['fileToUpload']['name']) ; 

            $target_file = $target_dir .  'pic1' . '.' . $ext;
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);

            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                echo getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . '.<br>';
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
            elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo '<span style="color:#ff0000;">*Only JPG, JPEG, PNG & GIF files are allowed.</span><br>';
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
                    echo "<meta http-equiv='refresh' content='0;url=/~beneshjs/User_Interface/project/enter_data_experience.php'>";
                    //header("Location: /~beneshjs/User_Interface/project/enter_data_experience.php");
                } else {
                    echo '<span style="color:#ff0000;">*There was an error uploading your file. Please try again.</span><br>';
                    echo "<br>";
                }
            }
            }
function checkExists($input) {
    if(file_exists('uploads/data.txt')) {
        $file = file_get_contents('uploads/data.txt');
        $brokenfile = explode(PHP_EOL, $file);
        switch($input) {
            case 'firstname':
                return $brokenfile[0];
                break;
            case 'lastname':
                return $brokenfile[1];
                break;
            case 'description':
                return $brokenfile[2];
                break;
            default:
                break;
        }
    }
    else{
        return $_POST[$input];
        // return isset($_POST[$input]) ? $_POST[$input] : '';
    }
}
            ?>
 
            <form name="Upload" action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" autocomplete="on">

			First Name: <br>
			<input type="text" name="firstname" id="first_name" value="<?php echo checkExists('firstname'); ?>"><br>
            <div id="validate"></div><br>
            
			Last Name:<br>
			<input type="text" name="lastname" id="last_name" value="<?php echo checkExists('lastname'); ?>"><br>
            <div id="validate1"></div><br>

            Enter a description of yourself below: <div class="tooltip"><img src="images/help.png" style="width: 16px; height: 16px;" />
            <span class="tooltiptext" style="padding:20px; text-align: left;">A brief overview of who you are, your experience, your strengths and your interests.</span>
            </div><br>
            <textarea rows="15" cols="90" id="description1" name="description"><?php echo checkExists('description'); ?></textarea><br>
            <div id="validate2"></div><br>
  			
    		Upload a professional headshot:<br><br>
    		<input type="file" name="fileToUpload" id="fileToUpload"><br><br>



    		<input type="submit" value="Next" name="Upload">

            <?php
                
                if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['description'])) { // check if both fields are set
                $txt = "uploads/data.txt"; 
                $fh = fopen($txt, 'w'); 
                $txt=htmlspecialchars($_POST['firstname'])."\n".htmlspecialchars($_POST['lastname'])."\n".htmlspecialchars($_POST['description']); 
                file_put_contents('uploads/data.txt',$txt."\n",FILE_APPEND); // log to data.txt 
                exit();
                };
                fwrite($fh,$txt); // Write information to the file
                fclose($fh); // Close the file
                //rename('data.txt', 'uploads/data.txt');
                
            ?>

			</form></div><br><br>
			
		</body>
</html>
