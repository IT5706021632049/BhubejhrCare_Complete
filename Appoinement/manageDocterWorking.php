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
</head>
<body>
  <nav class="navbar navbar-light bg-light">
    <a class="navbar-brand" href="#">
      <img src="logo app.png" width="40" height="40" class="d-inline-block align-top" alt="">
    <b style="font-size:30px;">DocterWorking</b>
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

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM docterworking";
  $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
    echo "<center><table style='width:80%'>";
    echo "<tr class='alert alert-success'>";
    echo "<td> Working ID </td>";
    echo "<td> Working Day </td>";
    echo "<td> Docter ID </td>";
    echo "<td> 10.00 - 10.30 </td>";
    echo "<td> 10.30 - 11.00 </td>";
    echo "<td> 11.00 - 11.30 </td>";
    echo "<td> 11.30 - 12.00 </td>";
    echo "<td> Status </td>";
    echo "</tr>";
    while($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>".$row["docterWorking_id"]."</td>";
      echo "<td>".$row["docterWorking_day"]."</td>";
      echo "<td>".$row["docter_id"]."</td>";
      echo "<td>".$row["docterWorking_1000_1030"]."</td>";
      echo "<td>".$row["docterWorking_1030_1100"]."</td>";
      echo "<td>".$row["docterWorking_1100_1130"]."</td>";
      echo "<td>".$row["docterWorking_1130_1200"]."</td>";
      echo "<td>".$row["docterWorking_status"]."</td>";
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
      <button type="button" class="btn btn-outline-primary"><a href="insertDocterWorking.php">Insert</a></button>
      <button type="button" class="btn btn-outline-success"><a href="editDocterWorking.php">Edit</a></button>
      <button type="button" class="btn btn-outline-danger"><a href="deleteDocterWorking.php">Delete</a></button>
    </div>
  </center>
<br>
</body>
</html>
