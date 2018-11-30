<!-- Jennifer Benesh -->
<!-- Rev 0 11/25/2018 -->
<html>
	<head>
		<title>ePortfolio Creator</title>
        <link rel="stylesheet" type="text/css" href="enter_data_home.css">
         <script>
            function validateForm() {
            var text;
            var text2;
            var x = document.forms["Upload"]["company_name1"].value;
            var y = document.forms["Upload"]["position_name1"].value;
            var z = document.forms["Upload"]["position1"].value;
            var comp2 = document.forms["Upload"]["company_name2"].value;
            var pos2 = document.forms["Upload"]["position_name2"].value;
            var desc2 = document.forms["Upload"]["position2"].value;
            var comp3 = document.forms["Upload"]["company_name3"].value;
            var pos3 = document.forms["Upload"]["position_name3"].value;
            var desc3 = document.forms["Upload"]["position3"].value;
            var good2 = 0;
            var good3 = 0;
            if (x != "" || y != "" || z != ""){
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
            }
            else{
                text2 = '<span style="color:#ff0000;">*Required Field</span>';
                document.getElementById("validate").innerHTML = text2;
                document.getElementById("validate1").innerHTML = text2;
                document.getElementById("validate2").innerHTML = text2;
            }  

            if (comp2 != "" || pos2 != "" || desc2 != ""){
                if (comp2 == "") {
                text = '<span style="color:#ff0000;">*Required Field</span>';
                document.getElementById("validate3").innerHTML = text;
                }
                else {
                text = "";
                document.getElementById("validate3").innerHTML = text;
                good2 = good2 +1;
                }
                if (pos2 == "") {
                text = '<span style="color:#ff0000;">*Required Field</span>';
                document.getElementById("validate4").innerHTML = text;
                }
                else {
                text = "";
                document.getElementById("validate4").innerHTML = text;
                good2 = good2 +1;
                }
                if (desc2 == "") {
                text = '<span style="color:#ff0000;">*Required Field</span>';
                document.getElementById("validate5").innerHTML = text;
                }
                else {
                text = "";
                document.getElementById("validate5").innerHTML = text;
                good2 = good2 +1;
                }
                if (x == "") {
                text = '<span style="color:#ff0000;">*Required Field</span>';
                document.getElementById("validate").innerHTML = text;
                }
                else {
                text = "";
                document.getElementById("validate").innerHTML = text;
                good2 = good2 +1;
                }
                if (y == "") {
                text = '<span style="color:#ff0000;">*Required Field</span>';
                document.getElementById("validate1").innerHTML = text;
                }
                else {
                text = "";
                document.getElementById("validate1").innerHTML = text;
                good2 = good2 +1;
                }
                if (z == "") {
                text = '<span style="color:#ff0000;">*Required Field</span>';
                document.getElementById("validate2").innerHTML = text;
                }
                else {
                text = "";
                document.getElementById("validate2").innerHTML = text;
                good2 = good2 +1;
                }

            }
            else {
                text2 = "";
                document.getElementById("validate3").innerHTML = text2;
                document.getElementById("validate4").innerHTML = text2;
                document.getElementById("validate5").innerHTML = text2;
                good2=6;
            }  
            if (comp3 != "" || pos3 != "" || desc3 != ""){
                if (comp3 == ""){
                    text2 = '<span style="color:#ff0000;">*Required Field</span>';
                    document.getElementById("validate6").innerHTML = text2; //breaks

                }
                else {
                    text2 = "";
                    document.getElementById("validate6").innerHTML = text2;
                    good3 = good3 +1;
                }
                if (pos3 == ""){
                    text2 = '<span style="color:#ff0000;">*Required Field</span>';
                    document.getElementById("validate7").innerHTML = text2; //breaks
                }
                else {
                    text2 = "";
                    document.getElementById("validate7").innerHTML = text2;
                    good3 = good3 +1;
                }
                if (desc3 == ""){
                    text2 = '<span style="color:#ff0000;">*Required Field</span>';
                    document.getElementById("validate8").innerHTML = text2; //breaks
                }
                else {
                    text2 = "";
                    document.getElementById("validate8").innerHTML = text2;
                    good3 = good3 +1;
                }
                if (comp2 == "") {
                    text2 = '<span style="color:#ff0000;">*Required Field</span>';
                    document.getElementById("validate3").innerHTML = text2;

                }
                else {
                    text2 = "";
                    document.getElementById("validate3").innerHTML = text2;
                    good3 = good3 +1;
                }
                if (pos2 == "") {
                    text2 = '<span style="color:#ff0000;">*Required Field</span>';
                    document.getElementById("validate4").innerHTML = text2;
                }
                else {
                    text2 = "";
                    document.getElementById("validate4").innerHTML = text2;
                    good3 = good3 +1;
                }
                if (desc2 == "") {
                    text2 = '<span style="color:#ff0000;">*Required Field</span>';
                    document.getElementById("validate5").innerHTML = text2;
                }
                else {
                    text2 = "";
                    document.getElementById("validate5").innerHTML = text2;
                    good3 = good3 +1;
                }
                if (x == "") {
                text = '<span style="color:#ff0000;">*Required Field</span>';
                document.getElementById("validate").innerHTML = text;
                }
                else {
                text = "";
                document.getElementById("validate").innerHTML = text;
                good3 = good3 +1;
                }
                if (y == "") {
                text = '<span style="color:#ff0000;">*Required Field</span>';
                document.getElementById("validate1").innerHTML = text;
                }
                else {
                text = "";
                document.getElementById("validate1").innerHTML = text;
                good3 = good3 +1;
                }
                if (z == "") {
                text = '<span style="color:#ff0000;">*Required Field</span>';
                document.getElementById("validate2").innerHTML = text;
                }
                else {
                text = "";
                document.getElementById("validate2").innerHTML = text;
                good3 = good3 +1;
                }
            

            }
            else {
                text2 = "";
                document.getElementById("validate6").innerHTML = text2;
                document.getElementById("validate7").innerHTML = text2;
                document.getElementById("validate8").innerHTML = text2;
                good3 = 9;
            }       
            

            if (x != "" && y != "" && z != "" && good2==6 && good3==9){

                return true;
            }
        
            

            
            document.body.scrollTop = document.documentElement.scrollTop = 0;
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
		<body>
            <div id="top1">
            <h1 style="color: white; padding-left:5px;padding-bottom:0px">ePortfolio Creator</h1>
            </div>
            <ul class="breadcrumb">
              <li><a href="https://homepages.uc.edu/~beneshjs/User_Interface/project/index.php" onclick="return confirm_click();">Home</a></li>
              <li><a href="https://homepages.uc.edu/~beneshjs/User_Interface/project/enter_data_home.php" onclick="return confirm_click1();">Your Homepage</a></li>
              <li><a href="#">Your Experience Page</a></li>
              <li></li>
            </ul>
            <div id="center_body" style="margin-right:25%;">
			<h1>Your Experience Page</h1>
			<p>Please fill out up to three experiences below (at least one section must be completed). Include the company name, position name, description, and image for each section you choose to fill out.</p>

            <?php
            
            if (!empty($_POST['company_name1']) && !empty($_POST['position_name1']) && !empty($_POST['position1'])){
                
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
                 $ext2 = findexts ($_FILES['fileToUpload2']['name']) ; 
                 $ext3 = findexts ($_FILES['fileToUpload3']['name']) ; 

                $target_file = $target_dir .  'pic2' . '.' . $ext;
                $target_file2 = $target_dir .  'pic3' . '.' . $ext2;
                $target_file3 = $target_dir .  'pic4' . '.' . $ext3;

                $uploadOk = 1;
                $uploadOk2 = 1;
                $uploadOk3 = 1;
                $up3 = 0;
                $up2 = 0;
               

                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));

                $imageFileType3 = strtolower(pathinfo($target_file3,PATHINFO_EXTENSION));


            // Check if image file is a actual image or fake image
                if(isset($_POST["submit"])) {
                    echo getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                    echo getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
                    $check2 = getimagesize($_FILES["fileToUpload2"]["tmp_name"]);
                    echo getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
                    $check3 = getimagesize($_FILES["fileToUpload3"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        echo "<br><br>";
                        $uploadOk = 1;
                    } else {
                        echo '<span style="color:#ff0000;">File from Company 1 is not an image. Please upload only images.</span>';
                        echo "<br><br>";
                        $uploadOk = 0;
                    }
                    if($check2 !== false) {
                        echo "File is an image - " . $check2["mime"] . ".";
                        echo "<br><br>";
                        $uploadOk2 = 1;
                    } else {
                        echo '<span style="color:#ff0000;">File from Company 2 is not an image. Please upload only images.</span>';
                        echo "<br><br>";
                        $uploadOk2 = 0;
                    }
                    if($check3 !== false) {
                        echo "File is an image - " . $check3["mime"] . ".";
                        echo "<br><br>";
                        $uploadOk3 = 1;
                    } else {
                        echo '<span style="color:#ff0000;">File from Company 3 is not an image. Please upload only images.</span>';
                        echo "<br><br>";
                        $uploadOk3 = 0;
                    }
                }




            // check if file is empty
                if(!file_exists($_FILES['fileToUpload']['tmp_name']) || !is_uploaded_file($_FILES['fileToUpload']['tmp_name'])) {
                    echo '<span style="color:#ff0000;">File from Company 1 was not uploaded. Please upload all files and try again.</span>';
                    echo "<br><br>";
                    $uploadOk = 0;
                    
                }
                elseif($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif") {
                    echo '<span style="color:#ff0000;">Only JPG, JPEG, PNG & GIF files are allowed. Check your file for Company 1.</span>';
                    echo "<br><br>";
                    $uploadOk = 0;
                }
                if (!empty($_POST['company_name2']) || !empty($_POST['position_name2']) || !empty($_POST['position2'])){
                     if(!file_exists($_FILES['fileToUpload2']['tmp_name']) || !is_uploaded_file($_FILES['fileToUpload2']['tmp_name'])) {
                    echo '<span style="color:#ff0000;">File from Company 2 was not uploaded. Please upload all files and try again.</span>';
                    echo "<br><br>";
                    $uploadOk2 = 0;
                }
                elseif($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
                    && $imageFileType2 != "gif") {
                    echo '<span style="color:#ff0000;">Only JPG, JPEG, PNG & GIF files are allowed. Check your file for Company 2.</span>';
                    echo "<br><br>";
                    $uploadOk2 = 0;

                // if everything is ok, try to upload file
                } 
                    if ($_FILES["fileToUpload2"]["size"] > 50000000000) {
                    echo '<span style="color:#ff0000;">Your file for Company 2 is too large. Please upload only images of a smaller size.</span>';
                    echo "<br><br>";
                    $uploadOk2 = 0;
                }
                    unlink('uploads/pic3.png');
                        unlink('uploads/pic3.jpg');
                        unlink('uploads/pic3.jpeg');
                        unlink('uploads/pic3.gif');
                    move_uploaded_file($_FILES["fileToUpload2"]["tmp_name"], $target_file2);
                    $up2=1;
                }

                if (!empty($_POST['company_name3']) || !empty($_POST['position_name3']) || !empty($_POST['position3'])){
                     if(!file_exists($_FILES['fileToUpload3']['tmp_name']) || !is_uploaded_file($_FILES['fileToUpload3']['tmp_name'])) {
                    echo '<span style="color:#ff0000;">File from Company 3 was not uploaded. Please upload all files and try again.</span>';
                    echo "<br><br>";
                    $uploadOk3 = 0;
                    
                }
                 elseif($imageFileType3 != "jpg" && $imageFileType3 != "png" && $imageFileType3 != "jpeg"
                    && $imageFileType3 != "gif") {
                    echo '<span style="color:#ff0000;">Only JPG, JPEG, PNG & GIF files are allowed. Check your file for Company 3.</span>';
                    echo "<br><br>";
                    $uploadOk3 = 0;
                }
                    if ($_FILES["fileToUpload3"]["size"] > 50000000000) {
                    echo '<span style="color:#ff0000;">Your file for Company 3 is too large. Please upload only images of a smaller size.</span>';
                    echo "<br><br>";
                    $uploadOk3 = 0;
                }
                   
                    
                        unlink('uploads/pic4.png');
                        unlink('uploads/pic4.jpg');
                        unlink('uploads/pic4.jpeg');
                        unlink('uploads/pic4.gif');
                    move_uploaded_file($_FILES["fileToUpload3"]["tmp_name"], $target_file3);
                    $up3=1;
                    
                }


            //elseif(!file_exists($_FILES['fileToUpload3']['tmp_name']) || !is_uploaded_file($_FILES['fileToUpload3']['tmp_name'])) {
             //   echo 'File from Company 3 was not uploaded. Please upload all files and try again.';
            //}
            // Check if file already exists
            /*elseif (file_exists($target_file)) {
                echo "File already exists. Please rename your file and try again.";
                $uploadOk = 0;
            }*/
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 50000000000) {
                echo '<span style="color:#ff0000;">Your file for Company 1 is too large. Please upload only images of a smaller size.</span>';
                echo "<br><br>";
                $uploadOk = 0;
            }


            // Allow certain file formats
                unlink('uploads/pic2.png');
                        unlink('uploads/pic2.jpg');
                        unlink('uploads/pic2.jpeg');
                        unlink('uploads/pic2.gif');
                

            // Check if $uploadOk is set to 0 by an error
                if ($uploadOk==0 || $uploadOk2==0 || $uploadOk3==0){

                    echo "<meta http-equiv='refresh' content='3'>";

                }
                elseif (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    if ($up2==0) {
                        unlink('uploads/pic3.png');
                        unlink('uploads/pic3.jpg');
                        unlink('uploads/pic3.jpeg');
                        unlink('uploads/pic3.gif');
                        
                    }
                    if ($up3==0) {
                        unlink('uploads/pic4.png');
                        unlink('uploads/pic4.jpg');
                        unlink('uploads/pic4.jpeg');
                        unlink('uploads/pic4.gif');
                    }

                    // header("Location: /~beneshjs/User_Interface/project/enter_data_resume.php");
                    echo "<meta http-equiv='refresh' content='0;url=/~beneshjs/User_Interface/project/enter_data_resume.php'>";
                    
                }
                else{
                    //header('Location: /~beneshjs/User_Interface/project/enter_data_experience.php');
                    echo "<meta http-equiv='refresh' content='3'>";
                }
            }

            }
            function checkExists($input) {
                if(file_exists('uploads/experience.txt')) {
                    $file = file_get_contents('uploads/experience.txt');
                    $brokenfile = explode(PHP_EOL, $file);
                    switch($input) {
                        case 'company_name1':
                            return $brokenfile[0];
                            break;
                        case 'position_name1':
                            return $brokenfile[1];
                            break;
                        case 'position1':
                            return $brokenfile[2];
                            break;
                        case 'company_name2':
                            return $brokenfile[3];
                            break;
                        case 'position_name2':
                            return $brokenfile[4];
                            break;
                        case 'position2':
                            return $brokenfile[5];
                            break;
                        case 'company_name3':
                            return $brokenfile[6];
                            break;
                        case 'position_name3':
                            return $brokenfile[7];
                            break;
                        case 'position3':
                            return $brokenfile[8];
                            break;
                        default:
                            break;
                    }
                }
                else{
                    return $_POST[$input];
                
                 //return isset($_POST[$input]) ? $_POST[$input] : '';
             }
            }
            ?>
            

            <form name="Upload" action="" method="post" enctype="multipart/form-data" onsubmit="return validateForm()" autocomplete="on">
            Company 1 Name:<br>
            <input type="text" name="company_name1" value="<?php echo checkExists('company_name1'); ?>"><br>
            <div id="validate"></div><br>
            Position 1 Name: <div class="tooltip"><img src="images/help.png" style="width: 16px; height: 16px;" />
            <span class="tooltiptext" style="padding:20px; text-align: left;">Also known as your job title.</span>
            </div><br>
            <input type="text" name="position_name1" value="<?php echo checkExists('position_name1'); ?>"><br>
            <div id="validate1"></div><br>

            Enter a description of your position for Company 1: <div class="tooltip"><img src="images/help.png" style="width: 16px; height: 16px;" />
            <span class="tooltiptext" style="padding:20px; text-align: left;">Go into detail about your work experiences, what you learned, and the skills you acquired from those experiences.</span>
            </div><br>
            <textarea rows="15" cols="90" name="position1"><?php echo checkExists('position1'); ?></textarea><br>
            <div id="validate2"></div><br>

			Upload an image that represents your experience for Company 1:<br><br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br><br><br><br>
           
            Company 2 Name:<br>
            <input type="text" name="company_name2" value="<?php echo checkExists('company_name2'); ?>"><br>
            <div id="validate3"></div><br>

            Position 2 Name: <div class="tooltip"><img src="images/help.png" style="width: 16px; height: 16px;" />
            <span class="tooltiptext" style="padding:20px; text-align: left;">Also known as your job title.</span>
            </div><br>
            <input type="text" name="position_name2" value="<?php echo checkExists('position_name2'); ?>"><br>
            <div id="validate4"></div><br>

            Enter a description of your position for Company 2: <div class="tooltip"><img src="images/help.png" style="width: 16px; height: 16px;" />
            <span class="tooltiptext" style="padding:20px; text-align: left;">Go into detail about your work experiences, what you learned, and the skills you acquired from those experiences.</span>
            </div><br>
            <textarea rows="15" cols="90" name="position2"><?php echo checkExists('position2'); ?></textarea><br>
            <div id="validate5"></div><br>


            Upload an image that represents your experience for Company 2:<br><br>
            <input type="file" name="fileToUpload2" id="fileToUpload2"><br><br><br><br>

            Company 3 Name:<br>
            <input type="text" name="company_name3" value="<?php echo checkExists('company_name3'); ?>"><br>
            <div id="validate6"></div><br> 
            Position 3 Name: <div class="tooltip"><img src="images/help.png" style="width: 16px; height: 16px;" />
            <span class="tooltiptext" style="padding:20px; text-align: left;">Also known as your job title.</span>
            </div><br>
            <input type="text" name="position_name3" value="<?php echo checkExists('position_name3'); ?>"><br>
            <div id="validate7"></div><br>

            Enter a description of your position for Company 3: <div class="tooltip"><img src="images/help.png" style="width: 16px; height: 16px;" />
            <span class="tooltiptext" style="padding:20px; text-align: left;">Go into detail about your work experiences, what you learned, and the skills you acquired from those experiences.</span>
            </div><br>
            <textarea rows="15" cols="90" name="position3"><?php echo checkExists('position3'); ?></textarea><br>
            <div id="validate8"></div><br>

            Upload an image that represents your experience for Company 3:<br><br>
            <input type="file" name="fileToUpload3" id="fileToUpload3"><br><br>

            <?php
                $myFile = "uploads/experience.txt";
                $fh = fopen($myFile, 'w') or die("can't open file");
                $stringData = htmlspecialchars($_POST['company_name1'])."\n".htmlspecialchars($_POST['position_name1'])."\n".htmlspecialchars($_POST['position1']."\n");
                //file_put_contents('uploads/experience.txt',$stringData."\n",FILE_APPEND); // log to data.txt 
                $stringData2 = htmlspecialchars($_POST['company_name2'])."\n".htmlspecialchars($_POST['position_name2'])."\n".htmlspecialchars($_POST['position2']."\n");
                //file_put_contents('uploads/experience.txt',$stringData2."\n",FILE_APPEND); // log to data.txt 
                $stringData3 = htmlspecialchars($_POST['company_name3'])."\n".htmlspecialchars($_POST['position_name3'])."\n".htmlspecialchars($_POST['position3']."\n");
                //file_put_contents('uploads/experience.txt',$stringData3."\n",FILE_APPEND); // log to data.txt 
                fwrite($fh, $stringData);
                fwrite($fh, $stringData2);
                fwrite($fh, $stringData3);
                fclose($fh);
            ?>

            <input type="submit" value="Next" name="Upload">
            </form></div><br><br>
            


			
		</body>
</html>
