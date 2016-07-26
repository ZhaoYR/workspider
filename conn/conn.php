<!--连接数据库-->
<?php
$dbcolarray = array('url', 'time', 'title','content');  
$conn = new mysqli ("localhost","root","","spider");
mysqli_query($conn,"set names utf8");	//对数据库中编码格式进行转换，避免出现中文乱码的问题

if (mysqli_connect_errno())
{
	echo 'Error : Could not connect to database . ';
	exit;
}
?>