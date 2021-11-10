<?php
$host="localhost";
$username = "TA2021006_user";
$password = "Kukk4Ruukku-1";
$db = "TA2021006_DB";

$conn = new mysqli($host, $username, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$sql = "SELECT hostname, manufacturer, product, serial, mac0, mac1, image, kernel_version, kernel_args, type   FROM Laitekanta WHERE hostname = 'pupula-kan-380'";
$result = $conn->query($sql);

$jsonArray;

if($result->num_rows > 0) {  
    while($row = $result->fetch_assoc()) {
        $jsonArray = array(
          "host" => $row['hostname'],
            "manufacturer" => $row['manufacturer'],
            "type" => $row["type"],
            "product" => $row['product'],
            "serial" => $row['serial'],
            "mac0" => $row['mac0'],
            "mac1" => $row['mac1'],
            "image" => $row['image'],
            "kernel_version" => $row['kernel_version'],
            "kernel_args" => $row['kernel_args'],
        );
  }
}

echo json_encode($jsonArray);
?>