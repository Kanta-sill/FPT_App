<?php
$conn_string = "host=ec2-52-44-55-63.compute-1.amazonaws.com post=5432 dbname=devpq1sen6eh1j user= rjawmetmdmsgrc pass=5f40622ca0333f8ea7f0d5afd07053381dd612d3e8f55745d9bafd4f6e859556";
$dbconn=pg_connect($conn_string);
if(isset(($_POST['username']))){
	$username=$_POST['username'];
}
if(isset(($_POST['pass']))){
	$pass=$_POST['pass'];
}

$sql="select * from tblaccount";

$result = pg_query($dbconn, $sql);
while ($row=pg_fetch_row($result)){
	if($row[0]==$username $$ $row[1]==$pass){
		echo "Login success";
	}
	else{
		echo "Login fail";
	}
}

// $row=pg_num_rows($result);
// if($row==1)
// {
// 	echo "Log in success";
// }
// else
// {
// 	echo "Log in fail";
// }


?>