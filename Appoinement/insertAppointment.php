<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="logo app.png" width="40" height="40" class="d-inline-block align-top" alt="">
      <b style="font-size:30px;">Appointment (INSERT)</b>
      <div align="right">
      <a href="home.php">HOME&nbsp;&nbsp;&nbsp;</a>
      <a href="manageDocterWorking.php">DocterWorking&nbsp;&nbsp;&nbsp;</a>
      <a href="manageAppointment.php">Appointment&nbsp;&nbsp;&nbsp;</a>
      </div>
      </a>
    </nav>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<br>
<input type="text" name="appointment_id" class="form-control" style="width:30%;" placeholder="Appointment ID :"><br>
<input type="text" name="appointment_description" class="form-control" style="width:30%;" placeholder="Appointment Description :"><br>
<input type="text" name="appointment_time" class="form-control" style="width:30%;" placeholder="Appointment Time :"><br>
<input type="text" name="docter_id" class="form-control" style="width:30%;" placeholder="Docter ID :"><br>
<input type="text" name="hn_id" class="form-control" style="width:30%;" placeholder="HN ID :"><br>
<input type="text" name="appointment_location" class="form-control" style="width:30%;" placeholder="Appointment Location :"><br>
<input type="text" name="department_id" class="form-control" style="width:30%;" placeholder="Department ID :"><br>
<input type="text" name="appointment_status" class="form-control" style="width:30%;" placeholder="Appointment Status :"><br>
<input type="text" name="appointment_day" class="form-control" style="width:30%;" placeholder="Appointment Day :"><br>
<input type="submit" name="submit" value="INSERT" class="btn btn-outline-primary">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$appointment_id = $_POST["appointment_id"];
$appointment_description = $_POST["appointment_description"];
$appointment_time = $_POST["appointment_time"];
$docter_id = $_POST["docter_id"];
$hn_id = $_POST["hn_id"];
$appointment_location = $_POST["appointment_location"];
$department_id = $_POST["department_id"];
$appointment_status = $_POST["appointment_status"];
$appointment_day = $_POST["appointment_day"];


if($appointment_id != "" && $appointment_description != "" && $appointment_time != "" && $docter_id != "" && $hn_id != "" && $appointment_location != "" && $department_id != "" && $appointment_status != "" && $appointment_day != ""){
  $check = "SELECT * FROM appointment  WHERE  appoint_id = $appointment_id";
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "appointment";
  // Create connection
  $conn = new mysqli($servername, $username, $password,$dbname);
  mysqli_set_charset($conn, "utf8");
  $result = mysqli_query($conn, $check);
  echo $check."<br>";
        if(mysqli_num_rows($result) > 0){
          echo "Data Duplicate";
        }
        else{
          $appointment_id = $_POST["appointment_id"];
          $appointment_description = $_POST["appointment_description"];
          $appointment_time = $_POST["appointment_time"];
          $docter_id = $_POST["docter_id"];
          $hn_id = $_POST["hn_id"];
          $appointment_location = $_POST["appointment_location"];
          $department_id = $_POST["department_id"];
          $appointment_status = $_POST["appointment_status"];
          $appointment_day = $_POST["appointment_day"];

              $insert = "INSERT INTO appointment (appoint_id, appoint_description, appoint_time, docter_id, hn_id, appoint_location, department_id, appoint_status, appoint_day)
              VALUES ($appointment_id, '$appointment_description', '$appointment_time', $docter_id, $hn_id, '$appointment_location', $department_id, $appointment_status, '$appointment_day')";
                 if ($conn->query($insert) === TRUE) {
                     echo "INSERT successfully";
                 }else {
                     echo "INSERT fail !!!";
                       }
            }
          }else{
            echo "Data is not empty.";
                }
}
?>


</body>
</html>
