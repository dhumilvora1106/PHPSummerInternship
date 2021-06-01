<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "internship_submit";
$connection = mysqli_connect($host, $username, $passwd, $dbname);
if($_POST){
    $fname = $_POST['txt1'];
    $lname = $_POST['txt2'];
    $gender = $_POST['txt3'];
    $mobile = $_POST['txt4'];
     $query = $_POST['txt5'];
   
    
    $q = mysqli_query($connection, "insert into user_q (u_fname,u_lname,u_gender,u_mobile,u_query )xvalues ('{$fname}','{$lname}','{$gender}','{$mobile}','{$query}')") or die(mysqli_error($connection));
}
    ?>
<!DOCTYPE HTML>
<html>

<head>
  <title>Creative Photoclicks</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html">The<span class="logo_colour">Creative Photoclicks</span></a></h1>
          <h2>Capturing Moments</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.html">Home</a></li>
          <li><a href="examples.html">Vision</a></li>
          <li><a href="page.html">Work</a></li>
        
          <li class="selected"><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
    </div>
    <div id="content_header"></div>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <!-- insert your sidebar items here -->
            <h3>Latest News</h3>
            <h4>Our Newest Work</h4>
            <h5>May 28'2021</h5>
            <p>We got chance to photoshoot our Prime Minister.<br />
                <p>Bollywood Red carpet Photoworks.<br />
          </div>
          <div class="sidebar_base"></div>
        </div>
        <div class="sidebar">
          <div class="sidebar_top"></div>
          <div class="sidebar_item">
            <h3>Useful Links</h3>
            <ul>
             <li><a href="https://www.nationalgeographic.com/">NatGeo</a></li>
              <li><a href="https://alison.com/">Courses</a></li>
              <li><a href="https://www.facebook.com/cphotoclicks.official">Facebook</a></li>
              <li><a href="https://www.instagram.com/friendly_dv/">Instagram</a></li>
            </ul>
          </div>
          <div class="sidebar_base"></div>
        </div>
      </div>
      <div id="content">
        <!-- insert the page content here -->
        <h1>Contact Us</h1>
        <p>Fill the Following Details, We will contact you soon!</p>       
          
        <form method="post">
            <table>
            <tr><td>First Name </td><td><input type="text" name="txt1"/><br/></td></tr>
            <tr><td>Last Name : </td><td><input type="text" name="txt2"/><br/></td></tr>
           <tr><td>Gender : </td><td><select name="txt3">
            <option>Male</option>
            <option>Female</option>
           </select><br/></td></tr>
        <tr><td>Mobile No. : </td><td><input type="number" name="txt4"/><br/></td></tr>
        <tr><td>Query Type</td><td><select name="txt5">
            <option>Photography</option>
            <option>Videography</option>
           </select><br/></td></tr>
        <tr><td><input type="submit"></td></tr>
                </table>
        </form>    
        <p><br /><br /></p>
      </div>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
      <p><a href="index.html">Home</a> | <a href="examples.html">Vision</a> | <a href="page.html">Work</a> | <a href="another_page.html">About Us</a> | <a href="contact.html">Contact Us</a></p>
      <p>Copyright &copy; Mr. Akash Padhiyar </p>
    </div>
  </div>
</body>
</html>
