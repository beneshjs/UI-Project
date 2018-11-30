<!-- Jennifer Benesh -->
<!-- Rev 0 11/25/2018 -->
<?php
if (file_exists("uploads/pic2.jpg")){
    $filename = "uploads/pic2.jpg";
}
if (file_exists('uploads/pic2.jpeg')){
    $filename = "uploads/pic2.jpeg";
}
if (file_exists('uploads/pic2.png')){
    $filename = "uploads/pic2.png";
}
if (file_exists('uploads/pic2.gif')){
    $filename = 'uploads/pic2.gif';
}

if (file_exists("uploads/pic3.jpg")){
    $filename2 = "uploads/pic3.jpg";
}
if (file_exists('uploads/pic3.jpeg')){
    $filename2 = "uploads/pic3.jpeg";
}
if (file_exists('uploads/pic3.png')){
    $filename2 = "uploads/pic3.png";
}
if (file_exists('uploads/pic3.gif')){
    $filename2 = 'uploads/pic3.gif';
}

if (file_exists("uploads/pic4.jpg")){
    $filename3 = "uploads/pic4.jpg";
}
if (file_exists('uploads/pic4.jpeg')){
    $filename3 = "uploads/pic4.jpeg";
}
if (file_exists('uploads/pic4.png')){
    $filename3 = "uploads/pic4.png";
}
if (file_exists('uploads/pic4.gif')){
    $filename3 = 'uploads/pic4.gif';
}

?>
<html>
<head>
    <title>Experiences</title>
    <link rel="stylesheet" type="text/css" href="created_crystal.css">
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
            }
        }
        client.send();
        }
        function readfileautomatically1 () {
        var client = new XMLHttpRequest();
        client.open('GET', '/~beneshjs/User_Interface/project/uploads/experience.txt');
        client.onreadystatechange = function()
        {
            if( client.responseText != '' )
            {
                var txt = client.responseText.split("\n");
                document.getElementById("companyname1").innerHTML = txt[0];
                document.getElementById("position1").innerHTML = txt[1];
                document.getElementById("company_description1").innerHTML = txt[2];
                document.getElementById("companyname2").innerHTML = txt[3];
                document.getElementById("position2").innerHTML = txt[4];
                document.getElementById("company_description2").innerHTML = txt[5];
                document.getElementById("companyname3").innerHTML = txt[6];
                document.getElementById("position3").innerHTML = txt[7];
                document.getElementById("company_description3").innerHTML = txt[8];
            }
        }
        client.send();
        }

        function hideImage(img)
        {
         img.style.display = "none";
        }
    </script>
    
</head>
<body onload="readfileautomatically();readfileautomatically1();">

<div class="header">
<span id="firstname"></span> <span id="lastname"></span>
</div>

<div class="nav-background">
<ul>
  <li><a class="active" href="/~beneshjs/User_Interface/project/created_homepage_crystal.php">Home</a></li>
  <li><a href="/~beneshjs/User_Interface/project/created_experiences_crystal.php">Experiences</a></li>
  <li><a href="/~beneshjs/User_Interface/project/created_resume_crystal.html">Resume</a></li>
  <li><a href="/~beneshjs/User_Interface/project/created_contact_crystal.html">Contact</a></li>
</ul>
</div>

<div id="wrapper">
    <br>
    <p style="text-align:center;"><img src="<?php echo $filename; ?>" style="width: 300px; height: auto"></p>

    <h1><span id="companyname1" align="right"></span></h1>
    <h2><span id="position1" align="right"></span></h2>
    <div class="center_text" style="text-indent: 2em;">
    <span id="company_description1" align="right"></span>
    </div>
    <br><br><br><br>

    <p style="text-align:center;"><img src="<?php echo $filename2; ?>" onerror="hideImage(this);" style="width: 300px; height: auto"></p>

    <h1><span id="companyname2" align="right"></span></h1>
    <h2><span id="position2" align="right"></span></h2>
    <div class="center_text" style="text-indent: 2em;">
    <span id="company_description2" align="right"></span>
    </div>
    <br><br><br><br>

    <p style="text-align:center;"><img src="<?php echo $filename3; ?>" onerror="hideImage(this);" style="width: 300px; height: auto"></p>

    <h1><span id="companyname3" align="right"></span></h1>
    <h2><span id="position3" align="right"></span></h2>
    <div class="center_text" style="text-indent: 2em;">
    <span id="company_description3" align="right"></span>
    </div>
    <br><br><br><br>

</div>


</body>
</html>