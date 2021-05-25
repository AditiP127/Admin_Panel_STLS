<?php
$con=mysqli_connect("localhost","root","","dbtraffic");
$q=mysqli_query($con,"update tbllocation set request='1'");
if($q==1)
{
	echo "1";
}
else
{
	echo "0";
}
?>