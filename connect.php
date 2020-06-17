<?php
$conn_string = "Host=ec2-52-44-55-63.compute-1.amazonaws.com Post=5432 Database=devpq1sen6eh1j User=rjawmetmdmsgrc Password=5f40622ca0333f8ea7f0d5afd07053381dd612d3e8f55745d9bafd4f6e859556";
$dbconn=pg_connect($conn_string);
if(isset(($_POST['username']))){
	$username=$_POST['username'];
}
if(isset(($_POST['pass']))){
	$pass=$_POST['pass'];
}

$sql="select * from tblaccount where _user='".$username."' and _pass='".$pass."'";

$result = pg_query($dbconn, $sql)
		or
        die("Không thể kết nối database");
$row=pg_num_rows($result);
if($row==1)
{
	echo "Log in success";
}
else
{
	echo "Log in fail";
}


?>