<html>
<head>
<link rel="stylesheet" href="styles.css">
</head>
<body>
<?php
include('database.php');

$link = mysqli_connect('localhost','manrajat_nodemysql','nodemysql123',"manrajat_quotes");   
$query1=mysqli_query($link, "SELECT quoteid, quote FROM quotes");
echo "<table><tr><td>Quote</td><td></td>";
while($query2=mysqli_fetch_array($query1))
{
echo "<tr><td>".$query2['quote']."</td>";
}
?>
</ol>
</table>
</body>
</html>