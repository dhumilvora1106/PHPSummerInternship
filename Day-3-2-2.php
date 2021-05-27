<?php declare(strict_types=1) ?>
<html>  
   <body>  
     Your Entered Marks are...<br/>
     <table border="1">
      <tr><td>English:</td><td><?php echo $_POST["num1"]; ?> <br/></td></tr>
      <tr><td>Maths:</td><td><?php echo $_POST["num2"]; ?> <br/></td></tr>
      <tr><td>Science:</td><td><?php echo $_POST["num3"]; ?> <br/></td></tr>
      <tr><td>Gujarati:</td><td><?php echo $_POST["num4"]; ?><br/></td></tr>
      <tr><td>Physics:</td><td><?php echo $_POST["num5"]; ?><br/></td></tr>
      <tr><td>Total:</td><td><?php echo $total = ($_POST["num1"] + $_POST["num2"] + $_POST["num3"] + $_POST["num4"] + $_POST["num5"]) ?></td></tr>
      <tr><td>Percentage:</td><td><?php echo $percentage = ($total/5) ?></td></tr>
   <tr><td colspan="2">
 <?php  
    if($total<35 || $_POST["num1"]<35 || $_POST["num2"]<35 || $_POST["num3"]<35 || ["num4"]<35 || $_POST["num5"]<35)
{
echo " You are Failed!";
}
else
if($percentage<=50)
{
echo "Yo've got Third Class";
}
else
if($percentage>=51 && $percentage<65)
{
echo "Yo've got Second Class";
}
else
if($percentage>=66 && $percentage<75)
{
echo "Yo've got First Class";
}
else
{
echo "Congratulations, Yo've got Distinction";
}
return 0;
?>
           </td></tr>
  </table>
   </body>  
</html> 
