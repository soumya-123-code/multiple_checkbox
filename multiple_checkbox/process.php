<?php
$url='localhost';
$username = "root";
$password = "";
$dbname = "admin";
$checkbox1 = $_POST['vehicle'];
    $chk="";
    foreach($checkbox1 as $chk1)
       {
          $chk.= $chk1.",";
       }

$conn = mysqli_connect($url, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO checkbox(vehicle)VALUES( '$chk' )";

if(mysqli_query($conn,$sql)) {

    echo 'Data added sucessfully';
}
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
