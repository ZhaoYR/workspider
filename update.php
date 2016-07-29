<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>新闻管理</title>
	<script type="text/javascript">  
  // 选择或者反选 checkbox  
  function CheckSelect(thisform)  
  {  
    // 遍历 form  
    for ( var i = 0; i < thisform.elements.length; i++)  
    {  
      // 提取控件  
      var checkbox = thisform.elements[i];  
      // 检查是否是指定的控件  
      if (checkbox.name === "groupCheckbox[]" && checkbox.type === "checkbox" && checkbox.checked === false)  
      {  
        // 正选  
        checkbox.checked = true;  
      }  
      else if (checkbox.name === "groupCheckbox[]" && checkbox.type === "checkbox" && checkbox.checked === true)  
      {  
        // 反选  
        checkbox.checked = false;  
      }  
    }  
  }
  function SelectAll(thisform)  
  {  
    // 遍历 form  
    for ( var i = 0; i < thisform.elements.length; i++)  
    {  
      // 提取控件  
      var checkbox = thisform.elements[i];  
      // 检查是否是指定的控件  
       checkbox.checked = true;  
    }  
  }    
</script>

</head>

<body>
	<?php
include("conn/conn.php");
$descript = mysqli_query($conn,"update news set origin = content ");
// if($descript){
// 		echo "<script>alert('更新描述成功！');window.location.href='update.php'</script>
// ";
// 	}else{
// 		echo "
// <script>alert('修改失败！');window.location.href='update.php'</script>
// ";
// 	}
?>

	<table >
		<tr>
			<td >
				<table align="center">
					<tr>
						<td>
							<div align="center">
								<a href="insert.php">添加新闻</a>
								<a href="update.php"></a>
							</div>
						</td>
						<td>
							<div align="center">
							
								<a href="update.php">管理新闻</a>
							</div>
						</td>
					</tr>
				</table>
			</td>
		</tr>

		<tr>
			<td>
				<form action="checkbox.php" method="post" enctype="multipart/form-data" name="groupCheckbox" id="groupCheckbox">
				<!-- <form action="insert_ok.php" method="post" enctype="multipart/form-data" name="form2" id="form2"> -->
					<table id="dataList" border="1" cellpadding="0" cellspacing="0">
						<tr>
							<td scope="col">
								<div align="center">选择</div>
							</td>
							<td scope="col">
								<div align="center">标题</div>
							</td>
							<td scope="col">
								<div align="center">url</div>
							</td>
							<td scope="col">
								<div align="center">来源</div>
							</td>
							<td scope="col">
								<div align="center">时间</div>
							</td>
							<td scope="col">
								<div align="center">摘要</div>
							</td>
							<td scope="col">
								<div align="center">修改</div>
							</td>
							<td scope="col">
								<div align="center">删除</div>
							</td>
						</tr>
						<?php 
							if (isset($_GET['page']))
							{		//判断page是否存在
								$page=$_GET['page'];		//为page定义变量名称
							}
							else
							{
								$page=1;					//将变量赋值为1
							}
							if($page)
							{
							  $page_size=20;         							//每页显示10条记录
							  $query="select * from news"; 						//定义查询语句
							  $result=mysqli_query($conn,$query);						//执行查询操作
							  $message_count=mysqli_num_rows($result);			//获取查询总数
							  $page_count=ceil($message_count/$page_size);		//获取总的页数
							  $offset=($page-1)*$page_size;						//计算每页的起始行数
							  $query="select * from news where id order by id desc limit $offset, $page_size";	//定义SQL语句，查询当前页显示的记录
							  $result=mysqli_query($conn,$query);						//执行查询操作
							}							

							while($array=mysqli_fetch_array($result))
							{			//循环输出查询的数据
								$array['time']=substr($array['time'], 0, 10);

						?>

						<tr>
							<td align="left"><input type="checkbox" name="groupCheckbox[]" value="<?php echo $array['id'];?>"/><?php echo $array['id'];?></td>
							<td align="left"><?php echo $array['title'];?></td>
							<td align="left"><a href="<?php echo $array['url'];?>" target = "_blank"><?php echo $array['url'];?></a></td>
							<td align="left"><?php echo $array['ip'];?></td>
							<td align="left"><?php echo $array['time'];?></td>
							<td align="left"><?php echo $array['content'];?></td>
							<td align="left"><a href="update_ok.php?id=<?php echo $array['id'];?>">修改</a></td>
							<td align="left"><a href="delete.php?id=<?php echo $array['id'];?>">删除</a></td>
						</tr>

						


					<?php
						}
					?>
					
					<tr>
						<td colspan="8" align="center">
					    	<input name="" type="button" class="input_hide" onClick="SelectAll(this.form);return false;" value="全选">
					    	<input name="" type="button" class="input_hide" onClick="CheckSelect(this.form);return false;" value="反选">
					        <input type="submit" name="submit" value="选中数据" /> 
                  			<input type="hidden" name="id" value=""/>
					     </form>
					   </td>				
					 </tr>

						<tr>
							<td height="37" colspan="8">
								<div align="center">共<?php echo $message_count;?>条记录 共<?php echo $page_count;?>页 当前第<?php echo $page;?>页
									<?php
										if($page!=1)
										{				
											echo "<a href=update.php?page=1>首页</a>
														";
											echo "
														<a href=update.php?page=".($page-1).">上一页</a>
														";
										}
										if($page
														<$page_count)
										{
											echo " <a href=update.php?page=".($page+1).">下一页</a>
														";
											echo "
														<a href=update.php?page=$page_count>尾页</a>
														";
										}
									?>
							</div>
						</td>
					</tr>

					
				</table>
			</form>
		</td>
	</tr>
</table>

<table width="500" height="150" border="0" align="center" cellpadding="0" cellspacing="0" >
 <?php

	$dbcolarray = array('username', 'password');  
	$conn = new mysqli ("localhost","root","","spider");
	mysqli_query($conn,"set names utf8");	//对数据库中编码格式进行转换，避免出现中文乱码的问题
	if (mysqli_connect_errno())
	{
		echo 'Error : Could not connect to database . ';
		exit;
	}

	  $select=mysqli_query($conn,"select * from user where id = '1' ");
	  $array=mysqli_fetch_array($select);

?>

    <tr>
    	<div align="center">期刊设置</div>
    </tr>

    <tr>
      <td align="center" valign="middle" >      
        <form action="set_ok.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
          <table cellpadding="0" cellspacing="0">
            <tr>
              <td>
                <div align="left" width="30">期数：</div>
              </td>
              <td>
                <div align="left">
                  <input name="username" type="text" id="username" value="<?php echo $array['username'];?>" size="50" /></div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left" width="30">时间：</div>
              </td>
              <td>
                <div align="left">
                  <input name="password" type="date" id="password" value="<?php $array['password']=substr($array['password'], 0, 10); echo $array['password'];?>" size="50" /></div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div align="center">
                  <input type="submit" name="Submit" value="提交" />
                  <input type="hidden" name="id" value="<?php echo $array['id'];?>"/>
                  <!--隐藏域--> </div>
              </td>
            </tr>
          </table>
      </td>
    </tr> 
	</form>

	<tr>
		<td align="center">
			<p>
				<a href="result.php" target="_blank"><button type = "buton">生成新闻页面</button></a>
			</p>
		</td>
	</tr>

</table>

</body>
</html>