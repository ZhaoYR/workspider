<?php 
header("content-type:text/html;charset=utf-8");		//设置文件编码
include("conn/conn.php");							//包含数据库连接文件
if (!$_POST['title']||!$_POST['url']||!$_POST['time']||!$_POST['content']||!$_POST['ip']||!$_POST['origin']) 
{
	echo "请输入一条完整的新闻。<br>";
	echo "<a href='insert.php'>	<button type = 'button'>返回</button></a>";
}

else if(isset($_POST['Submit']) and $_POST['Submit']=="提交")
{		//判断提交按钮是否存在
	$title=$_POST['title'];
	$url=$_POST['url'];	
	$ip=$_POST['ip'];
	$time=$_POST['time'];
	$content=$_POST['content'];
	$origin=$_POST['origin'];
	$insert=mysqli_query($conn,"insert into news(title,url,ip,time,content，origin) values('$title','$url','$ip','$time','$content','$origin')");		//执行添加操作
	echo mysqli_error($conn);
	if($insert)
	{							//判断添加语句是否执行成功
		echo "<script>alert('添加成功！');window.location.href='update.php'</script>";			//输出添加成功提示
	}
	else
	{
		echo "<script>alert('添加失败！');window.location.href='update.php'</script>";		//输出添加失败提示
	}
}
?>