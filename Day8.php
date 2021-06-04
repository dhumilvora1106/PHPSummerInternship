<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "inernship_register";
$connection = mysqli_connect($host, $username, $passwd, $dbname);
//if(!isset($_GET['id']) || empty($GET['id'])){
//header("location:Day7-1.php"); }
$editid = $_GET['id'];
$editq =  mysqli_query($connection,"select * from s_register where st_id='{$editid}'") or die(mysqli_error($connection));
$editdata = mysqli_fetch_array($editq);
if($_POST){
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];
    $txt4 = $_POST['txt4'];
    $txt5 = $_POST['txt5'];
    $txt6 = $_POST['txt6'];
    $txt10 = $_POST['txt10'];
    $uu = mysqli_query($connection,"update s_register set st_id='{$txt1}',st_id='{$txt1}',st_name='{$txt2}',st_gender='{$txt3}',st_mobile='{$txt4}',st_college='{$txt5}',st_city='{$txt6}',st_birthdate='{$txt10}'where st_id='{$editid}'") or die(mysqli_error($connection));
}
    if($uu){
        echo "<script>alert(Record Updated');window.location='Day7-1.php';</script>";
    } 
?>

<html>
    <body>
    <form method="POST">
             <table border="1">
                 <tr><td>Id : </td><td><input type="text" value="<?php echo $editdata['st_id']; ?>" name="txt1"/><br/></td></tr>
            <tr><td>Name : </td><td><input type="text" value="<?php echo $editdata['st_name']; ?>"name="txt2"/><br/></td></tr>
            <tr><td>Gender : </td><td>Male<input type="radio"<?php if($editdata['st_id']=="Male") {echo "checked"; } ?> value="Male" name="txt3"> Female<input type="radio" <?php if($editdata['st_id']=="Female") {echo "checked";}?> value="Female" name="txt3"></td></tr>
        <tr><td>Mobile No. : </td><td><input type="number" value="<?php echo $editdata['st_mobile']; ?>" name="txt4"/><br/></td></tr>
        <tr><td>College : </td><td><input type="text" value="<?php echo $editdata['st_college']; ?>"name="txt5"><br/></td></tr>
        <tr><td>city : </td><td><input type="text" value="<?php echo $editdata['st_city']; ?>"name="txt6"><br/></td></tr>
        <tr><td>Birth Date : </td><td><input type="date" value="<?php echo $editdata['st_birthdate']; ?>" name="txt10"><br/></td></tr>
        <tr><td><input type="submit"></td></tr>
              </table>
        </form>
    </body>
</html>

