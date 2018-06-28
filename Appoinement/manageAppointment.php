<html>
<head>
  <style>
    table, tr, td {
    /* border: 1px solid black;
    border-collapse: collapse; */
    text-align: center;
  }
</style>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<meta http-equiv=Content-Type content="text/html; charset=utf-8">
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="logo app.png" width="40" height="40" class="d-inline-block align-top" alt="">
    <b style="font-size:30px;">Appointment</b>
    <div align="right">
    <a href="home.php">HOME&nbsp;&nbsp;&nbsp;</a>
    <a href="manageDocterWorking.php">DocterWorking&nbsp;&nbsp;&nbsp;</a>
    <a href="manageAppointment.php">Appointment&nbsp;&nbsp;&nbsp;</a>
    </div>
    </a>
  </nav>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "appointment";
  // Create connection
  $conn = new mysqli($servername, $username, $password,$dbname);
  mysqli_set_charset($conn, "utf8");
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM appointment";
  $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
    echo "<center><table style='width:80%'>";
    echo "<tr class='alert alert-success'>";
    echo "<td> Appointment<br>ID </td>";
    echo "<td> Appointment<br>Description </td>";
    echo "<td> Appointment<br>Time </td>";
    echo "<td> Docter ID </td>";
    echo "<td> HN ID </td>";
    echo "<td> Appointment<br>Location </td>";
    echo "<td> Department<br>ID </td>";
    echo "<td> Appointment<br>Status </td>";
    echo "<td> Appointment<br>Day </td>";
    echo "</tr>";
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>".$row["appoint_id"]."</td>";
      echo "<td>".$row["appoint_description"]."</td>";
      echo "<td>".$row["appoint_time"]."</td>";
      echo "<td>".$row["docter_id"]."</td>";
      echo "<td>".$row["hn_id"]."</td>";
      echo "<td>".$row["appoint_location"]."</td>";
      echo "<td>".$row["department_id"]."</td>";
      echo "<td>".$row["appoint_status"]."</td>";
      echo "<td>".$row["appoint_day"]."</td>";
      echo "</tr>";
    }
      echo "</table></center>";
    } else {
      echo "Select Data failed !!!!!!";
    }
$conn->close();
  ?>
<!-- -------------------------------------------------------------INSERT -->
  <br><br>
  <center>
    <div class="btn-group" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-outline-primary"><a href="insertAppointment.php">Insert</a></button>
      <button type="button" class="btn btn-outline-success"><a href="editAppointment.php">Edit</a></button>
      <button type="button" class="btn btn-outline-danger"><a href="deleteAppointment.php">Delete</a></button>
    </div>
  </center>
<br>
</body>
</html>
