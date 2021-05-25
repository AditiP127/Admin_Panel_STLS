<?php
$con=mysqli_connect("localhost","root","","dbtraffic");
$email=$_REQUEST["email"];
$pass=$_REQUEST["upass"];


// if($pass=="" || $email=="")
// {
//  echo "Fill up the form";
// }
// else if(!preg_match("/^[a-z]*[0-9]*@[a-z]*[0-9]*\.[a-z]{2,3}$/", $email))
// {
// 	echo "Invalid Email. Please reenter";
// }
// else
// {
$q=mysqli_query($con,"select * from tbluser where email='$email' and upass='$pass'");



if(mysqli_num_rows($q)==1)
{
	$q1=mysqli_query($con,"select * from tbluser where email='$email'");
	$r1=mysqli_fetch_array($q1);
	echo $r1["uid"];

}
else
{
	echo "0";
}


?>