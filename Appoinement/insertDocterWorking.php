<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
  <body>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="logo app.png" width="40" height="40" class="d-inline-block align-top" alt="">
      <b style="font-size:30px;">DocterWorking (INSERT)</b>
      <div align="right">
      <a href="home.php">HOME&nbsp;&nbsp;&nbsp;</a>
      <a href="manageDocterWorking.php">DocterWorking&nbsp;&nbsp;&nbsp;</a>
      <a href="manageAppointment.php">Appointment&nbsp;&nbsp;&nbsp;</a>
      </div>
      </a>
    </nav>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
<br>
<input type="text" name="working_id" class="form-control" style="width:30%;" placeholder="Working ID :"><br>
<input type="text" name="working_day" class="form-control" style="width:30%;" placeholder="Working Day :"><br>
<input type="text" name="docter_id" class="form-control" style="width:30%;" placeholder="Docter ID :"><br>
<input type="text" name="1000_1030" class="form-control" style="width:30%;" placeholder="Input 10.00 - 10.30 :"><br>
<input type="text" name="1030_1100" class="form-control" style="width:30%;" placeholder="Input 10.30 - 11.00 :"><br>
<input type="text" name="1100_1130" class="form-control" style="width:30%;" placeholder="Input 11.00 - 11.30 :"><br>
<input type="text" name="1130_1200" class="form-control" style="width:30%;" placeholder="Input 11.30 - 12.00 :"><br>
<input type="text" name="working_status" class="form-control" style="width:30%;" placeholder="Status :"><br>
<input type="submit" name="submit" value="INSERT" class="btn btn-outline-primary">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$working_id = $_POST["working_id"];
$working_day = $_POST["working_day"];
$docter_id = $_POST["docter_id"];
$t1000_1030 = $_POST["1000_1030"];
$t1030_1100 = $_POST["1030_1100"];
$t1100_1130 = $_POST["1100_1130"];
$t1130_1200 = $_POST["1130_1200"];
$working_status = $_POST["working_status"];


if($working_id != "" && $working_day != "" && $working_day != "" && $docter_id != "" && $t1000_1030 != "" && $t1030_1100 != "" && $t1100_1130 != "" && $t1130_1200 != "" && $working_status != ""){
  $check = "SELECT * FROM docterworking  WHERE  docterWorking_id = $working_id";
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "appointment";
  // Create connection
  $conn = new mysqli($servername, $username, $password,$dbname);
  $result = mysqli_query($conn, $check);
  echo $check."<br>";
        if(mysqli_num_rows($result) > 0){
          echo "Data Duplicate";
        }
        else{
              $insert = "INSERT INTO docterworking (docterWorking_id, docterWorking_day, docter_id, docterWorking_1000_1030, docterWorking_1030_1100, docterWorking_1100_1130, docterWorking_1130_1200, docterWorking_status)
              VALUES ($working_id, '$working_day', $docter_id, $t1000_1030, $t1030_1100, $t1100_1130, $t1130_1200, $working_status)";
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
