<?php
    $conn = mysqli_connect("localhost","root","");

        // kiểm tra kết nối
    if(!$conn){
        die('fail');
    }
        echo "success";

    // danh sách db
    $database =mysqli_query("SHOW DATABASE");

    while($row = mysql_fetch_array($database)){
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }


    // đóng kết nối
    mysqli_close($conn);
?>