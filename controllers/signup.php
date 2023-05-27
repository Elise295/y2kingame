<?php
require_once __DIR__ . '/../dtos/database/database.php';
$conn = (new Database())->getConnectToQuery();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lấy thông tin từ biểu mẫu đăng ký
    $name = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Kiểm tra nếu các trường không trống
    if (!empty($name) && !empty($password) && !empty($repassword)) {
       

        // Kiểm tra xem tên người dùng đã tồn tại hay chưa
        $checkUsernameQuery = "SELECT * FROM tbl_account where user_name = '{$name}'";
        $checkUsernameResult = mysqli_query($conn, $checkUsernameQuery);
        if (mysqli_num_rows($checkUsernameResult) > 0) {
            // Tên người dùng đã tồn tại, chuyển hướng đến trang đăng ký lại
            header("Location: signup.php");
            exit();
        }

        $name1 = mysqli_real_escape_string($conn, $name);
        $password2 = mysqli_real_escape_string($conn, $password);

        $insertUserQuery = "INSERT INTO tbl_account (user_name, password,acc_name,acc_phone,acc_address) VALUES ('{$name1}', '{$password2}','{$fullname}','{$phone}','{$address}')";
        $insertUserResult = mysqli_query($conn, $insertUserQuery);

        if ($insertUserResult) {
            // Đăng ký thành công, chuyển hướng đến trang đăng nhập
            header("Location: ../login.php");
            exit();
        } else {
            // Đăng ký thất bại, chuyển hướng đến trang đăng ký lại
            header("Location: ../signup.php");
            exit();
        }
    } else {
        // Nếu có trường bị bỏ trống, chuyển hướng đến trang đăng ký lại
        header("Location: ../signup.php");
        exit();
    }
}
?>
