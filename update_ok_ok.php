<?php
header("Content-type:text/html;charset=utf-8");
include("conn/conn.php");
if(isset($_POST['Submit']) and $_POST['Submit']=="提交"){
	$update=mysqli_query($conn,"update news set title='".$_POST['title']."',url='".$_POST['url']."',ip='".$_POST['ip']."',time='".$_POST['time']."',content='".$_POST['content']."' where id='".$_POST['id']."'");
	if($update){
		echo "<script>alert('修改成功！');window.location.href='update.php'</script>
";
	}else{
		echo "
<script>alert('修改失败！');window.location.href='update_ok.php'</script>
";
	}
}
?>