<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'head.php';?>
</head>
<body>
  <?php
  if(isset($_POST["btnapprove"]))
  {
    extract($_POST);
    echo "Hello";
    mysqli_query($con,"update tbllocation set request=2");
  }
  if(isset($_POST["btndiapprove"]))
  {
    extract($_POST);
    mysqli_query($con,"update tbllocation set request=0");
  }

  ?>
<?php include 'header.php';?>
<?php include 'menu.php';?>
<form method="post">
<table class="table" width="100%" style="overflow: scroll;">
  <Tr>

    <td>
     <b>Signal Location</b>
    </td>
    <td>
    Approve
   </td>
     <td>
    Disapprove
   </td>
  </Tr>

<?php
$q=mysqli_query($con,"select * from tbllocation");
while($r=mysqli_fetch_array($q))
{
?>

<tr>
  <Td>
    <?php echo $r["location"];?>
  </Td>
  <td>
    <?php
    if($r["request"]==1)
    {
      ?>
    <input type="submit" value="Approve" class="btn btn-success" name="btnapprove">
    <?php
  }
  ?>
  </td>
  <td>
    <?php
    if($r["request"]==2)
    {
      ?>
      <input type="submit" value="Disapprove" class="btn btn-danger" name="btndiapprove">
    <?php
  }
  ?>
 
  </td>



  
</Tr>
<?php
}
?>
 
</table>
</form>
<?php include 'footer.php';?>
</body>
</html>