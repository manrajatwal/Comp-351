<html>
<body>
<?php
include('database.php');
if(isset($_GET['quoteid']))
{
$quoteid=$_GET['quoteid'];
$link = mysqli_connect('localhost','manrajat_nodemysql','nodemysql123',"manrajat_quotes");   
$query1=mysqli_query($link, "DELETE FROM quotes WHERE quoteid='$quoteid'");
if($query1)
{
header('location:admin.php');
}
}
?>
</body>
</html>