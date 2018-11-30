<!-- Jennifer Benesh -->
<!-- Rev 0 11/25/2018 -->
<!DOCTYPE html>
<html>
	<body>

	<?php
	$txt = "data.txt"; 
	$fh = fopen($txt, 'w+'); 
	if (isset($_POST['firstname']) && isset($_POST['lastname'])) { // check if both fields are set
   	$txt=$_POST['firstname'].' - '.$_POST['lastname']; 
   	file_put_contents('data.txt',$txt."\n",FILE_APPEND); // log to data.txt 
   	exit();
	}
    fwrite($fh,$txt); // Write information to the file
    fclose($fh); // Close the file
    ?>

	</body>
</html>