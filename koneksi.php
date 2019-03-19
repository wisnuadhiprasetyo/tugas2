<?php
    
    $kon = mysqli_connect("localhost", "id8951611_wisnuadhi",'12345',"id8951611_akademik");

    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>