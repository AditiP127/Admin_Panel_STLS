<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'head.php';?>
</head>
<body>

<?php include 'header.php';?>
<?php
if(isset($_POST["btnlogin"]))
{
	extract($_POST);
	$q=mysqli_query($con,"select * from tbladmin where aemail='$txtemail' and apass='$txtpass'");
	if(mysqli_num_rows($q)>0)
	{
		header("location:addsignal.php");
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("Invalid Login");
		</script>
		<?php
	}
}
?>
<center>
	<form method="post">
	<table class="table">
		<tr>
			<td>
				Enter Email
			</td>
			<td>
				<input type="text" name="txtemail" required>
			</td>
		</tr>
		<tr>
			<td>
				Enter Password
			</td>
			<td>
				<input type="password" name="txtpass">
			</td>
		</tr>
		<Tr>
			<td>
				<input type="submit" name="btnlogin" value="Login">
			</td>
		</Tr>
	</table>
</form>
</center>
<?php include 'footer.php';?>