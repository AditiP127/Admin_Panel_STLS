<?php
$con=mysqli_connect("localhost","root","","dbtraffic");
 $name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["pass"];

if($name=="" || $pass=="" || $email=="")
{
 echo "Fill up the form";
}
else if(!(preg_match("/^[a-z]*$/", $name)))
{
	echo "Name should contain only letters";
}
else if(!preg_match("/^[a-z]*[0-9]*@[a-z]*[0-9]*\.[a-z]{2,3}$/", $email))
{
	echo "Invalid Email. Please reenter";
}
else
{
$q=mysqli_query($con,"insert into tbluser(uname,upass,email)Values('$name','$pass','$email')");



if($q==1)
{
	echo "1";
}
else
{
	echo "0";
}
}

?>