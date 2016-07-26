<?php
header("Content-type:text/html;charset=utf-8");
include("conn/conn.php");
if(isset($_POST['Submit']) and $_POST['Submit']=="提交"){
	$update=mysqli_query($conn,"update user set username='".$_POST['username']."',password='".$_POST['password']."' where id='1'");
	if($update){
		echo "<script>alert('修改成功！');window.location.href='update.php'</script>
";
	}else{
		echo "
<script>alert('修改失败！');window.location.href='update.php'</script>
";
	}
}
?>