<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include 'head.php';?>
</head>
<body>
<?php include 'header.php';?>
<?php include 'menu.php';?>
<?php
  if(isset($_POST["btnadd"]))
  {
    extract($_POST);

    mysqli_query($con,"insert into tbllocation(location,latitude,longitude)values('$txtlocation','$txtlat','$txtlon')");
  }
?>
<form method="post">
  <table class="table">
    <tR>
      <td>
        Signal Location
      </td>
      <td>
        <input type="text" name="txtlocation" class="form-control">

      </td>
    </tR>


    <tR>
      <td>
        Latitude
      </td>
      <td>
        <input type="text" name="txtlat" class="form-control">

      </td>
    </tR>

    <tR>
      <td>
        Longitude
      </td>
      <td>
        <input type="text" name="txtlon" class="form-control">

      </td>
    </tR>
    <tr>
      <Td>
        <input type="submit" name="btnadd" value="Add Signal" class="btn btn-success">
      </Td>
    </tr>

  </table>
<?php include 'footer.php';?>
</body>
</html>