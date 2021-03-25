<html>
<body>
<?php
include('database.php');
if(isset($_GET['quoteid']))
{
$quoteid=$_GET['quoteid'];
if(isset($_POST['submit']))
{
$quote=$_POST['quote'];
$link = mysqli_connect('localhost','manrajat_nodemysql','nodemysql123',"manrajat_quotes");   
$query3=mysqli_query($link, "UPDATE quotes SET quote='$quote' WHERE quoteid='$quoteid'");
if($query3)
{
header('location:admin.php');
}
}
$query1=mysqli_query($link, "SELECT * FROM quotes WHERE quoteid='$quoteid'");
$query2=mysqli_fetch_array($query1);
?>
<form method="post" action="">
Quote:<input type="text" name="quote" value="<?php echo $query2['quote']; ?>" /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
</body>
</html>