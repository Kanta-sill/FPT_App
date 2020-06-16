<?php
header('Content-Type: text/html; charset=UTF-8');

if (isset($_POST['dangnhap'])) {

    include('connect.php');

    $username = addslashes($_POST['_user']);
    $password = addslashes($_POST['_pass']);

    if (!$username || !$password) {
        echo "Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $password = md5($password);

    $query = mysql_query("SELECT _user, _pass FROM member WHERE _user='$username'");
    if (mysql_num_rows($query) == 0) {
        echo "Tên đăng nhập này không tồn tại. Vui lòng kiểm tra lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $row = mysql_fetch_array($query);

    if ($password != $row['_pass']) {
        echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }

    $_SESSION['_user'] = $username;
    echo "Xin chào <b>" . $username . "</b>. Bạn đã đăng nhập thành công. <a href=''>Thoát</a>";
    die();
}
?>
