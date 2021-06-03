<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "inernship_register";
$connection = mysqli_connect($host, $username, $passwd, $dbname);
$q = mysqli_query($connection,"select * from s_register where is_delete=0") or die(mysqli_error($connection));
echo "<table border='1'>";
echo "<tr>";
echo"<th>Id</th>";
echo"<th>Name</th>";
echo"<th>Gender</th>";
echo"<th>Mobile</th>";
echo"<th>College</th>";
echo"<th>City</th>";
echo"<th>Birthdate</th>";
echo"<th>Action</th>";
echo"</tr>";
while($row = mysqli_fetch_array($q)){
    echo "<tr>";
    echo "<td>{$row['st_id']}</td>";
    echo "<td>{$row['st_name']}</td>";
    echo "<td>{$row['st_gender']}</td>";
    echo "<td>{$row['st_mobile']}</td>";
    echo "<td>{$row['st_college']}</td>";
    echo "<td>{$row['st_city']}</td>";
    echo "<td>{$row['st_birthdate']}</td>";
    echo "<td><a href='delete.php?deleteid={$row['st_id']}'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";
echo "<a href='dbconnect1.php'>Add Record</a>";
