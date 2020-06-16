<?php
$ketnoi['host'] = 'ec2-52-44-55-63.compute-1.amazonaws.com';
$ketnoi['dbname'] = 'devpq1sen6eh1j'; 
$ketnoi['username'] = 'rjawmetmdmsgrc'; 
$ketnoi['password'] = '5f40622ca0333f8ea7f0d5afd07053381dd612d3e8f55745d9bafd4f6e859556'; 
@mysql_connect(
                "{$ketnoi['host']}", "{$ketnoi['username']}", "{$ketnoi['password']}")
        or
        die("Không thể kết nối database");
@mysql_select_db(
                "{$ketnoi['dbname']}")
        or
        die("Không thể chọn database");
?>

