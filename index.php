<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="style.css"/>
</head>
<body>
    <form action='index.php' class="dangnhap" method='POST'>
        Tên đăng nhập : <input type='text' name='username' />
        Mật khẩu : <input type='password' name='password' />
        <input type='submit' class="button" name="dangnhap" value='Đăng nhập' />
        
        <?php require 'function.php'; ?>
    </form>
</body>
</html>
