<html>
<body>
<?php
include('database.php');

if(isset($_POST['submit']))
{
$quote= $_POST['quote'];
$link = mysqli_connect('localhost','manrajat_nodemysql','nodemysql123',"manrajat_quotes");  
$query = mysqli_query($link, "INSERT INTO quotes (quote) values('$quote')");
echo "INSERT INTO quotes VALUES ('$quote')";
if($query)
{
header('location:admin.php');
}
}

?>
<fieldset style="width:300px;">
<form method="post" action="">
Quote: <input type="text" name ="quote"><br>
<br>
<input type="submit" name="submit">
</form>
</fieldset>
</body>
</html>

