<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "inernship_register";
$connection = mysqli_connect($host, $username, $passwd, $dbname);
$id = $_GET['deleteid'];
$q = mysqli_query($connection, "update s_register set is_delete=1 where st_id='{$id}'") or die(mysqli_error($connection));
if($q)
{
    echo "<script>alert('Record Deleted');window.location='Day7-1.php';</script>";
}
