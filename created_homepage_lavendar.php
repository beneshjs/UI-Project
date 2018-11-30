<!-- Jennifer Benesh -->
<!-- Rev 0 11/25/2018 -->
<?php
if (file_exists("uploads/pic1.jpg")){
    $filename = "uploads/pic1.jpg";
}
if (file_exists('uploads/pic1.jpeg')){
    $filename = "uploads/pic1.jpeg";
}
if (file_exists('uploads/pic1.png')){
    $filename = "uploads/pic1.png";
}
if (file_exists('uploads/pic1.gif')){
    $filename = 'uploads/pic1.gif';
}


?>

<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="created_lavendar.css">
    <script>
    function readfileautomatically () {
        var client = new XMLHttpRequest();
        client.open('GET', '/~beneshjs/User_Interface/project/uploads/data.txt');
        client.onreadystatechange = function()
        {
            if( client.responseText != '' )
            {
                var txt = client.responseText.split("\n");
                document.getElementById("firstname").innerHTML = txt[0];
                document.getElementById("lastname").innerHTML = txt[1];
                document.getElementById("homedescription").innerHTML = txt[2];
            }
        }
        client.send();
        }
    </script>
    
</head>
<body onload="readfileautomatically();">

<div class="header">
<span id="firstname"></span> <span id="lastname"></span>
</div>

<div class="nav-background">
<ul>
  <li><a class="active" href="/~beneshjs/User_Interface/project/created_homepage_lavendar.php">Home</a></li>
  <li><a href="/~beneshjs/User_Interface/project/created_experiences_lavendar.php">Experiences</a></li>
  <li><a href="/~beneshjs/User_Interface/project/created_resume_lavendar.html">Resume</a></li>
  <li><a href="/~beneshjs/User_Interface/project/created_contact_lavendar.html">Contact</a></li>
</ul>
</div>

<div id="wrapper">
    <br>
    <p style="text-align:center;"><img src="<?php echo $filename; ?>" style="width: 300px; height: auto"></p>

    <h1>About Me</h1>
    <div class="center_text" style="text-indent: 2em;">
    <span id="homedescription" align="right"></span>
    </div>
    <br><br><br><br>
</div>


</body>
</html>