<?php
require_once __DIR__ . '/../dtos/AccountUnit.php';
$status = 'null';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == null || $password == null) {
        $status = 'null';
    } else {
        $accUnit = new AccountUnit();
        $account = $accUnit->getAccount($username, $password);
        if ($account) {
            // đăng nhập thành công
            // add cookie
            setcookie("user", $account->getAccID(), time() + (86400 * 30), "/");
            setcookie("username", $account->getUserName(), time() + (86400 * 30), "/");
            // setcookie("password", $account->getPassword(), time() + (86400 * 30), "/");
            setcookie("name", $account->getName(), time() + (86400 * 30), "/");
            setcookie("phone", $account->getPhone(), time() + (86400 * 30), "/");
            setcookie("address", $account->getAddress(), time() + (86400 * 30), "/");

            // đưa về trang chủ
            echo '<script>window.location.href = "index.php";</script>';

        } else {
            //dăng nhập thất bại, quăng ra thông báo
            $status = 'login false';
        }
    }
}
?>