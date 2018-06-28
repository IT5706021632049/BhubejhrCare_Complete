<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="logo app.png" width="40" height="40" class="d-inline-block align-top" alt="">
      <b style="font-size:30px;">Appointment (EDIT)</b>
      <div align="right">
      <a href="home.php">HOME&nbsp;&nbsp;&nbsp;</a>
      <a href="manageDocterWorking.php">DocterWorking&nbsp;&nbsp;&nbsp;</a>
      <a href="manageAppointment.php">Appointment&nbsp;&nbsp;&nbsp;</a>
      </div>
    </a>
  </nav>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <br>
  <input type="text" name="edit_appointment_id" class="form-control" style="width:30%;" placeholder="Appointment ID :"><br>
  <input type="text" name="edit_appointment_description" class="form-control" style="width:30%;" placeholder="Appointment Description :"><br>
  <input type="text" name="edit_appointment_time" class="form-control" style="width:30%;" placeholder="Appointment Time :"><br>
  <input type="text" name="edit_docter_id" class="form-control" style="width:30%;" placeholder="Docter ID :"><br>
  <input type="text" name="edit_hn_id" class="form-control" style="width:30%;" placeholder="HN ID :"><br>
  <input type="text" name="edit_appointment_location" class="form-control" style="width:30%;" placeholder="Appointment Location :"><br>
  <input type="text" name="edit_department_id" class="form-control" style="width:30%;" placeholder="Department ID :"><br>
  <input type="text" name="edit_appointment_status" class="form-control" style="width:30%;" placeholder="Appointment Status :"><br>
  <input type="text" name="edit_appointment_day" class="form-control" style="width:30%;" placeholder="Appointment Day :"><br>
  <input type="submit" name="submit" value="EDIT" class="btn btn-outline-success">
  </form>

  <?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "appointment";

 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 mysqli_set_charset($conn, "utf8");
 // Check connection
 if (!$conn) {die("Connection failed: " . mysqli_connect_error());}
 // sql to delete a record
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

$edit_appointment_id = $_POST["edit_appointment_id"];
$edit_appointment_description = $_POST["edit_appointment_description"];
$edit_appointment_time = $_POST["edit_appointment_time"];
$edit_docter_id = $_POST["edit_docter_id"];
$edit_hn_id = $_POST["edit_hn_id"];
$edit_appointment_location = $_POST["edit_appointment_location"];
$edit_department_id = $_POST["edit_department_id"];
$edit_appointment_status = $_POST["edit_appointment_status"];
$edit_appointment_day = $_POST["edit_appointment_day"];

 $update = "UPDATE appointment SET appoint_description='$edit_appointment_description', appoint_time='$edit_appointment_time', docter_id=$edit_docter_id ,hn_id=$edit_hn_id, appoint_location='$edit_appointment_location', department_id=$edit_department_id, appoint_status=$edit_appointment_status, appoint_day= '$edit_appointment_day' WHERE appoint_id=$edit_appointment_id";
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
