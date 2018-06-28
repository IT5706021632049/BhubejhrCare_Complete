<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="logo app.png" width="40" height="40" class="d-inline-block align-top" alt="">
      <b style="font-size:30px;">DocterWorking (DELETE)</b>
      <div align="right">
      <a href="home.php">HOME&nbsp;&nbsp;&nbsp;</a>
      <a href="manageDocterWorking.php">DocterWorking&nbsp;&nbsp;&nbsp;</a>
      <a href="manageAppointment.php">Appointment&nbsp;&nbsp;&nbsp;</a>
      </div>
    </a>
  </nav>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <br>
  <input type="text" name="delete_working_id" class="form-control" style="width:30%;" placeholder="Working ID :"> <br>
  <input type="submit" name="submit" value="DELETE" class="btn btn-outline-danger">
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

$delete_working_id = $_POST["delete_working_id"];
$delete = "DELETE FROM docterworking WHERE docterWorking_id = $delete_working_id";
if (mysqli_query($conn, $delete)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
}

$conn->close();
?>
</body>
</html>
