<?php
header("content-type:text/html;charset=utf-8");
include("conn/conn.php");
if(isset($_GET['id'])){
	$delete=mysqli_query($conn,"delete from news where id='".$_GET['id']."'");
	if($delete){
		echo "<script>alert('删除成功！');window.location.href='update.php'</script>
";
	}else{
		echo "
<script>alert('删除失败！');window.location.href='update.php'</script>
";
	}
}
?>