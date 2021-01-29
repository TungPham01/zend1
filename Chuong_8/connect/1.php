<?php
    $conn = mysqli_connect("localhost","root","","manage_user");

        // kiểm tra kết nối
    if(!$conn){
        die('fail');
    }
        echo "success";

    mysqli_close($conn);
?>