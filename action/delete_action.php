<?php
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("127.0.0.1", "root", "", "spk_sumi");
$id = $_GET['id'];
$sql = "delete from barang where kd_barang='$id' ";
$result = $conn->query($sql);

    if ($result === TRUE) {
        //echo "New record created successfully";
    } else {
        echo "Error: " . $result . "<br>" . $conn->error;
    }


    header("Location:/spk_sumi?page=barang_data");
?>