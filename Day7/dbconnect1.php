<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "inernship_register";
$connection = mysqli_connect($host, $username, $passwd, $dbname);
if($_POST){
    $id = $_POST['txt1'];
    $name = $_POST['txt2'];
    $gender = $_POST['txt3'];
    $mobile = $_POST['txt4'];
     $college = $_POST['txt5'];
    $city= $_POST['txt6'];
   
    $dob = $_POST['txt10'];
    
    $q =mysqli_query($connection, "insert into s_register (st_id,st_name,st_gender,st_mobile,st_college,st_city,st_birthdate) values ('{$id}','{$name}','{$gender}','{$mobile}','{$college}','{$city}','{$dob}')") or die(mysqli_error($connection));
if ($q){
    echo "<script>alert('Record Added')</script>";
}
    }
?>
<html>
    <body>
        <h2>Registration Form</h2>
        <form method="post">
            <table>
            <tr><td>Id : </td><td><input type="text" name="txt1"/><br/></td></tr>
            <tr><td>Name : </td><td><input type="text" name="txt2"/><br/></td></tr>
           <tr><td>Gender : </td><td><select name="txt3">
            <option>Male</option>
            <option>Female</option>
           </select><br/></td></tr>
        <tr><td>Mobile No. : </td><td><input type="number" name="txt4"/><br/></td></tr>
        <tr><td>College : </td><td><input type="text" name="txt5"><br/></td></tr>
        <tr><td>city : </td><td><input type="text" name="txt6"><br/></td></tr>
       
        <tr><td>Birth Date : </td><td><input type="date" name="txt10"><br/></td></tr>
        <tr><td><input type="submit"></td></tr>
                </table>
        </form>
    </body>
</html>

<?php echo "<a href='Day7-1.php'>Display Record</a>";
