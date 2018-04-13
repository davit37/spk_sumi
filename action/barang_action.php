<?php

$conn = new mysqli("127.0.0.1", "root", "", "spk_sumi");

if(isset($_POST['aksi'])&&$_POST['aksi']==="tambah"){
    $query = "INSERT INTO barang (nama_barang,harga,stok)VALUES('$_POST[nm_barang]','$_POST[hrg_barang]','$_POST[stok_barang]')";
    $result = $conn->query($query);

    if ($result === TRUE) {
        //echo "New record created successfully";
    } else {
        echo "Error: " . $result . "<br>" . $conn->error;
    }
    
}
if(isset($_POST['aksi'])&&$_POST['aksi']==="edit"){
    $query = "UPDATE barang SET nama_barang='$_POST[nm_barang]', harga='$_POST[hrg_barang]', stok='$_POST[stok_barang]' WHERE kd_barang='$_POST[id]'";
    $result = $conn->query($query);

    if ($result === TRUE) {
        //echo "New record created successfully";
    } else {
        echo "Error: " . $result . "<br>" . $conn->error;
    }
    
}
echo "
<script>alert ('Penyimpanan Berhasil')</script>
";

header("Location:/spk_sumi?page=barang_data");

?>