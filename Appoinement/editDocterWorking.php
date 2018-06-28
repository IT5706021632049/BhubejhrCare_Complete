<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="logo app.png" width="40" height="40" class="d-inline-block align-top" alt="">
      <b style="font-size:30px;">DocterWorking (EDIT)</b>
      <div align="right">
      <a href="home.php">HOME&nbsp;&nbsp;&nbsp;</a>
      <a href="manageDocterWorking.php">DocterWorking&nbsp;&nbsp;&nbsp;</a>
      <a href="manageAppointment.php">Appointment&nbsp;&nbsp;&nbsp;</a>
      </div>
    </a>
  </nav>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <br>
  <input type="text" name="edit_working_id" class="form-control" style="width:30%;" placeholder="Working ID :"><br>
  <input type="text" name="edit_working_day" class="form-control" style="width:30%;" placeholder="Working Day :"><br>
  <input type="text" name="edit_docter_id" class="form-control" style="width:30%;" placeholder="Docter ID :"><br>
  <input type="text" name="edit_1000_1030" class="form-control" style="width:30%;" placeholder="Input 10.00 - 10.30 :"><br>
  <input type="text" name="edit_1030_1100" class="form-control" style="width:30%;" placeholder="Input 10.30 - 11.00 :"><br>
  <input type="text" name="edit_1100_1130" class="form-control" style="width:30%;" placeholder="Input 11.00 - 11.30 :"><br>
  <input type="text" name="edit_1130_1200" class="form-control" style="width:30%;" placeholder="Input 11.30 - 12.00 :"><br>
  <input type="text" name="edit_working_status" class="form-control" style="width:30%;" placeholder="Status :"><br>
  <input type="submit" name="submit" value="EDIT" class="btn btn-outline-success">
  </form>

  <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "appointment";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
 // sql to delete a record
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $edit_working_id = $_POST["edit_working_id"];
$edit_working_day = $_POST["edit_working_day"];
$edit_docter_id = $_POST["edit_docter_id"];
$edit_1000_1030 = $_POST["edit_1000_1030"];
$edit_1030_1100 = $_POST["edit_1030_1100"];
$edit_1100_1130 = $_POST["edit_1100_1130"];
$edit_1130_1200 = $_POST["edit_1130_1200"];
$edit_working_status = $_POST["edit_working_status"];

 $update = "UPDATE docterworking SET docterWorking_day='$edit_working_day', docter_id=$edit_docter_id, docterWorking_1000_1030=$edit_1000_1030, docterWorking_1030_1100=$edit_1030_1100, docterWorking_1100_1130=$edit_1100_1130, docterWorking_1130_1200=$edit_1130_1200, docterWorking_status=$edit_working_status WHERE docterWorking_id=$edit_working_id";
 if ($conn->query($update) === TRUE) {
     echo "Record updated successfully";
 } else {
     echo "Error updating record: " . $conn->error;
 }
 }

 $conn->close();
 ?>
<br>
</body>
</html>
