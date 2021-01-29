<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        p.p1{
            color: red;
        }
    </style>
</head>
<body>
<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED); // whyyyyyy
    require ("function.php");
// biến mảng chứa lỗi

// có dữ liệu submit đi hay không
if (isset($_POST) && !empty($_POST)) {
    
    $errors = [];

   $name = $_POST["name"];
   if(trim($name) == ""){
        $errors["name"] = "không được để trống";
   }
    else{
        if(checkInput($name,"name")==false){
        $errors["name"] = "không hợp lệ";
        $name = "";
        }
    }

    $email = $_POST["email"];
    if(checkInput($email,"email")==false){
        $errors["email"] = "không hợp lệ";
        $email = "";
    }

    $phone = $_POST["phone"];
    if(checkInput($phone,"phone")==false){
        $errors["phone"] = "không hợp lệ";
        $phone = "";
    }

    $birthday = $_POST["birthday"];
    if(checkInput($birthday,"birthday")==false){
        $errors["birthday"] = "không hợp lệ";
        $birthday = "";
    }

    $website = $_POST["website"];
    if(checkInput($website,"website")==false){
        $errors["website"] = "không hợp lệ";
        $website = "";
    }

     $point = $_POST["point"];
    if(checkInput($point,"point")==false){
        $errors["point"] = "không hợp lệ";
        $point = "";
    }

    $note = $_POST["note"];
    if(checkInput($note,"note")==false){
        $errors["note"] = "không hợp lệ";
        $note = "";
    }
}


?>
    <h1>Profile</h1>

    <pre>
        khi form profile submit đi nếu hợp lệ
        chuyển hướng đến file profile.php in ra các dữ liệu lấy được
        header("Location: url");
        exit();
        url là link ví dụ profile.php
        - không hợp lệ
        in ra thông báo lỗi
        - in ra dữ liệu đã nhập trong form khi có lỗi
    </pre>

    <form name="profile" method="post" action="#">
        <div>
            <label>Tên sinh viên</label>
            <p style="font-size: 10px">Nhập đủ họ tên ( tối thiểu phải có hai chữ )</p>
            <input type="text" name="name" value="<?php echo $name; ?>" autocomplete="off">
            <p class="p1"><?php echo $errors["name"]; ?></p>
        </div>

        <div>
            <label>Số điện thoại sinh viên</label>
            <p style="font-size: 10px">(chỉ được nhập 10 số)</p>
            <input type="text" name="phone" value="<?php echo $phone; ?>" autocomplete="off">
            <p class="p1"><?php echo $errors["phone"]; ?></p>
        </div>

        <div>
            <label>Email sinh viên</label>
            <input type="email" name="email" value="<?php echo $email; ?>" autocomplete="off">
            <p class="p1"><?php echo $errors["email"]; ?></p>
        </div>

        <div>
            <label>Ngày tháng năm sinh (YYYY-MM-DD) (1997-10-05)</label>
            <input type="text" name="birthday" value="<?php echo $birthday; ?>" autocomplete="off">
            <p class="p1"><?php echo $errors["birthday"]; ?></p>
        </div>


        <div>
            <label>Giới tính</label>
            <input type="radio" name="gender" value="1"> Nam
            <input type="radio" name="gender" value="0"> Nữ
        </div>

        <div>
            <label>Link github ( bắt đầu bằng https://github.com/username</label>
            <input type="text" name="website" value="<?php echo $website; ?>" autocomplete="off">
            <p class="p1"><?php echo $errors["website"]; ?></p>
        </div>

        <div>
            <label>Điểm sinh viên (0 - 10)</label>
            <input type="number" name="point" value="<?php echo $point; ?>" autocomplete="off">
            <p class="p1"><?php echo $errors["point"]; ?></p>
        </div>

        <div>
            <p>Ghi chú ( chỉ được nhập tối đa 200 chữ )</p>
            <textarea name="note" cols="50" rows="10" value="<?php echo $note; ?>"></textarea>
            <!-- whyyyyyyy -->
            <p class="p1"><?php echo $errors["note"]; ?></p>
        </div>

        <div>
            <input type="submit" name="sumbit" value="In thông tin" autocomplete="off">
        </div>
    </form>

</body>
</html>