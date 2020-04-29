 <?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"gromosindia")
?>

 <!doctype html>
<html>
<head>
<title> Site Name selection</title>

</head>

<body>
<div class="col-sm-9 col-md-10 mt-5">
<form  class="mx-5" action="" method="POST">
<select>
<?php
$res=mysqli_query("select * from sitename_bt");
while($row=mysqli_fetch_array($res)) 
{
?>

<option><?php echo $row["site_name"]; ?></option>

<?php
}
?>
</select>
</form>
</div>
</body>
</html>