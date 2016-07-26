<!DOCTYPE html>
<html>
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

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

    <title>技术动态第<?php echo $array['username'];?>期</title>

    <style type="text/css">

        a:link { 
		
		color: #575757;
  
        text-decoration: none;

        font-size: 15px;

        }
        a:hover { color: #2E7189; cursor: pointer;}
		
		#listyle {
		
		color:#333; 
		
		font:16px/24px 'microsoft yahei'; 
		
		margin-top: 2px;
		
		}

		.caption{color:#999; font:12px/20px 'microsoft yahei'; margin: 0; margin-top:5px; padding-bottom: 30px; border-bottom: 1px solid rgb(232,232,232);}
		.title{ font: 16px/24px 'microsoft yahei';margin-top: 30px; letter-spacing: 1px;}
		.res{ font:12px/20px 'microsoft yahei'; margin: 0; margin-top:5px; color: rgb(207,207,207); text-align: right;}

    </style>
    
</head>
    
<body style="margin:0" align="center">

	<p>如果您收到的电子邮件为纯文本，不包含任何图像，<a style="color:#2981a9" href="http://www.cosos.cn/portal/journal/journal-20160415.php" target="_blank"><span style="text-decoration: underline;">请点击这里 ！</span></a></p>
    
	<img src="http://www.cosos.cn/portal/images/bannerpicture2.jpg" width="655" height="150" style="center"> <br>
	
    <table width = "657" align = "center">				
	  
        <tr width="657" height="5" style="background:#FFD079; font: 12px/40px 'Microsoft Yahei'" >
		        
				<span style="valign:bottom"> <img src="http://www.cosos.cn/portal/images/banner4.png"  width="436" height="30" usemap="#Map2" style="margin:0px 100px 0px 0px; border:none;" align = "center"> </span>
                
				<span style="valign:bottom ; font: 12px/40px 'Microsoft Yahei';margin:0px 0px 0px 0px;">总第 <span style="color: #c00; font-weight:bold;"><?php echo $array['username'];?></span> 期 <?php $array['password']=substr($array['password'], 0, 10); echo $array['password'];?></span> 
		  		
        </tr>

	</table>
	
    <table width="657" height="120" align="center" border="0" cellpadding="0" cellspacing="0" style="background-color: rgb(244, 244, 244);border: 1px solid rgb(236, 236, 236);border-top: none;border-bottom: none;">
	  
        <tr>         
            
			<td width="507" height="120">
         
                <table border="0" cellpadding="20" cellspacing="0" width="100%" >
                    
					<tbody>
				
						<tr>
								<!-- <h3 style="color: #03C1E4;letter-spacing: 1px; font:18px/30px 'microsoft yahei';">技术动态介绍</h3>
								
								<h4 style="font-family: 'microsoft yahei'; font-size:10pt;" align = "left">《COSOS技术动态》着眼“开源操作系统”主要科技成果和关键技术，关注业界实时动向与新闻动态，为用户提供开源操作系统领域的最新播报，快速了解一周重大事件。</h4> -->

								<dl><h3 style="color: #03C1E4;letter-spacing: 1px; font:18px/30px 'microsoft yahei';"align="left";>  技术动态介绍</h3></dl>
								
								<dl style="font-family: 'microsoft yahei'; font-size:10pt;" align='left';>  《COSOS技术动态》着眼“开源操作系统”主要科技成果和关键技术，关注业界实时动向与新闻动态，为用户提供开源操作系统领域的最新播报，快速了解一周重大事件。</dl>
							
							
						</tr>
					
					</tbody>
		         
				</table>
       
			</td>
	
			<td width="25" height="120">
			
			</td>
			
			<td width="100" height="120">
			
				<table>
					
					<tbody>
						
						<tr>
							
							<td width="100" height="20" style="font-family: 'microsoft yahei';font-size:8pt;">社区微信公众账号</td>
							
						</tr>
						
						<tr>
							
							<td><img src="http://www.cosos.cn/portal/images/qrcode.jpg" width="100" height="100"></td>
						
						</tr>
			
					</tbody>
					
				</table>
				
			</td>

			<td width="25" height="120">
				
			</td>
	
        </tr>

	</table>
	
	<!-- <table align="center" border="0" cellpadding="0" cellspacing="0" width="657">

        <tr>	  
	      
            <td valign="top" width="657" height="80" style="border-left:1px rgb(236,236,236) solid; border-right:1px rgb(236,236,236) solid; border-bottom:1px rgb(236,236,236) solid;">
          
                <table border="0" cellpadding="20" cellspacing="0" width="100%">
            
                    <tbody>
			
                        <tr>
              
                            <td>
							
								<h3  style="color: #ff0000;letter-spacing: 1px; font:18px/30px 'microsoft yahei'; margin:0 0 5px 0px;">COSOS社区第二轮“会员推荐”活动正式开始啦</h3>
                
                                								
                                    <h4 style="color: #ff0000;font:16px/24px 'microsoft yahei'; margin: 0 0 5px 0px;"><a href="http://cosos.cn/community/forum.php?mod=viewthread&tid=1434&extra=" target="_blank">第二轮“会员推荐奖励”活动已经正式开始，各位会员朋友，快来参加吧！</a>
                                
              
                            </td>

                        </tr>
						
                    </tbody>
		  
                </table>
				
			</td>							
	 
        </tr>
		
	</table> -->

<?php

//定义常量  
define('DB_HOST', 'localhost');  
define('DB_USER', 'root');  
define('DB_PASS', '');  
define('DB_DATABASENAME', 'spider');  
define('DB_TABLENAME', 'news');  
//数据库表的列名
$dbcolarray = array('url', 'time', 'title','content');  
  
//mysql_connect  
@ $conn = new mysqli (DB_HOST,DB_USER,DB_PASS,DB_DATABASENAME);
if (mysqli_connect_errno())
{
	echo 'Error : Could not connect to database . ';
	exit;
}



//读取表中纪录条数  
$sql = sprintf("select count(*) from %s", DB_TABLENAME);  
$result = mysqli_query($conn , $sql);  
if ($result)  
{  
    $count = mysqli_fetch_row($result);  
}  
else  
{  
    die("query failed");  
}  
//echo "表中共有$count[0] 条新闻<br />";  
  
  
$sql = sprintf("select %s from %s", implode(",",$dbcolarray), DB_TABLENAME);  
//$sql = sprintf("select left(%s,200) from %s", implode(",",$dbcolarray), DB_TABLENAME);//想要截取内容的前200个字符
//select substring('example.com', 4, 2);
//$sql = sprintf("select substring(%s, 4, 2) from %s", implode(",",$dbcolarray), DB_TABLENAME);
$result = mysqli_query($conn,$sql);

//表格
echo '<table align="center" border="0" cellpadding="0" cellspacing="0" width="657">

        <tr>	  
	      
            <td valign="top" width="657" height="300" style="border-left:1px rgb(236,236,236) solid; border-right:1px rgb(236,236,236) solid; border-bottom:1px rgb(236,236,236) solid;">
          
                <table border="0" cellpadding="20" cellspacing="0" width="100%">
            
                    <tbody>
			
                        <tr>
              
                            <td>
							
								<h3 style="color: #03C1E4;letter-spacing: 1px; font:18px/30px "microsoft yahei"; margin:0 0 18px 0px;" align = "center">技术动态列表</h3>
                
                                <dl style="margin:0;" class="liststyle">';

while ($row=mysqli_fetch_array($result))
{  
	
	$tdstr = "";
	$tdstr .= "<p align='left' style='color:#333; font:16px/24px 'microsoft yahei'; margin-top: 2px;'>&nbsp&nbsp$row[title]</p>";
	//$tdstr .= "<td><a href = '$row[url]' target='_blank'>$row[url]</a></td>"; 
	//$tdstr .= "<td>$row[time]</td>"; 
	//$tdstr .= "<td>$row[title]</td>"; 
	//$tdstr .= "<td width = 200px  style=word-wrap:break-word>$row[content]</td>"; 	
	//$tdstr .= "<td type=hidden>$row[content]</td>";
	//$tdstr .= "<td>$row[content]</td>"; 
	
    echo $tdstr; 
}  

?>

</dl></td></tr></tbody></table></td></tr></table>

	<table align="center" border="0" cellpadding="0" cellspacing="0" width="657">
	
        <tr>	
           
            <td valign="top" width="657" height="600" style="border-left:1px rgb(236,236,236) solid;border-right:1px rgb(236,236,236) solid;border-bottom:1px rgb(236,236,236) solid">            
            
                <table border="0" cellpadding="20" style="" cellspacing="0" width="100%" >
            
                    <tbody>
			
						<tr>
              
                            <td><h3 style="color: #03C1E4; letter-spacing: 1px; font:18px/30px 'microsoft yahei'; margin:0 0 18px 0;">技术动态</h3>
                
								<dl style="margin:0;">

								
<?php

 
//数据库表的列名
$dbcolarray = array('url', 'time', 'title','content','ip');  
  
//mysql_connect  
@ $conn = new mysqli (DB_HOST,DB_USER,DB_PASS,DB_DATABASENAME) or die("connect failed" . mysqli_connect_errno());  
  
  
$sql = sprintf("select %s from %s", implode(",",$dbcolarray), DB_TABLENAME);  
//$sql = sprintf("select left(%s,200) from %s", implode(",",$dbcolarray), DB_TABLENAME);//想要截取内容的前200个字符
//select substring('example.com', 4, 2);
//$sql = sprintf("select substring(%s, 4, 2) from %s", implode(",",$dbcolarray), DB_TABLENAME);
$result = mysqli_query($conn,$sql);

//数据库表的列名
$dbcolarray = array('url', 'time', 'title','content','ip');  
  
//mysql_connect  
$conn = new mysqli(DB_HOST,DB_USER,DB_PASS, DB_DATABASENAME) or die("connect failed" . mysql_error());  
  
  
$sql = sprintf("select %s from %s", implode(",",$dbcolarray), DB_TABLENAME);  
//$sql = sprintf("select left(%s,200) from %s", implode(",",$dbcolarray), DB_TABLENAME);//想要截取内容的前200个字符
//select substring('example.com', 4, 2);
//$sql = sprintf("select substring(%s, 4, 2) from %s", implode(",",$dbcolarray), DB_TABLENAME);
$result = mysqli_query($conn , $sql);

								
while ($row=mysqli_fetch_array($result))
{  
	$row['time']=substr($row['time'], 0, 10);
	$tdst = "";
    $tdst .= "<dd align ='left' style='font:16px/24px 'microsoft yahei'; margin-top: 10px;'><a href='$row[url]' target='_blank'>$row[title]</a></dd>";
    $tdst .= "<dd align ='left' style='font:12px/20px 'microsoft yahei'; margin: 0; margin-top:5px;'>来源：$row[ip] $row[time]</dd>";
	$tdst .= "<dd align ='left' style='color:#999; font:12px/20px 'microsoft yahei'; margin: 0;margin-top:5px;'>$row[content]</dd>";
	$tdst .="<br>";
    echo $tdst; 
}  

mysqli_free_result($result);  
mysqli_close($conn);


?>

</dl></td></tr></tbody></table></td></tr></table>

<table align="center" border="0" cellpadding="0" cellspacing="0" width="657">    
        
		<tr>
            
            <td align="center" style="border-left:1px rgb(236,236,236) solid;border-right:1px rgb(236,236,236) solid;border-bottom:1px rgb(236,236,236) solid; background:#DEF4FA; font-family: microsoft yahei; font-size: 10.0pt; padding: 10px 0px;  "> 如果您有好的建议和意见，请及时联系我们。 邮箱地址 <span style="text-decoration: underline"><a href="mailto:cosos@iscas.ac.cn">cosos@iscas.ac.cn</a></span>
                
				<p align="center" style="margin-top:10px"><span style="font-family: microsoft yahei; font-size: 10.0pt; padding: 10px 0px;">版权所有：中国科学院软件研究所</span></p>
                
			</td>     
	     
        </tr>
        
		<tr>
         
			<td  height="20">
          
            </td>
            
		</tr>				     
    
    </table>
   
    <map name="Map2">
  
		<area shape="rect" coords="15,3,110,30" href="http://www.cosos.cn/outservice/public/resource/reslists" target="_blank">
      
        <area shape="rect" coords="115,5,210,30" href="http://www.cosos.cn/outservice/public/ostrain" target="_blank">
      
        <area shape="rect" coords="215,5,320,30" href="http://www.cosos.cn/outservice/public/index" target="_blank"> 
    
        <area shape="rect" coords="325,4,430,30" href="http://www.ztb.iscas.ac.cn/outservice/public/home/index" target="_blank">
        
    </map>


<!-- 插入一条新闻并在insert_news.php中展示 -->
<!-- <h1>insert new news</h1>
<form action="insert_news - 160623.php " method="post" target="_blank">
<table border="0">
	<tr>
		<td>title</td>
		<td><input type="text" name="title" maxlength="50" size="30"></td>
	</tr>
	<tr>
		<td>url</td>
		<td><input type="text" name="url" maxlength="50" size="30"></td>
	</tr>
	<tr>
		<td>time</td>
		<td><input type="text" name="time" maxlength="50" size="30"></td>
	</tr>
	<tr>
		<td>content</td>
		<td><input type="text" name="content" maxlength="50" size="30"></td>
	</tr>
	<tr>
		<td colspan = "2"><input type="submit" name = "insert" value="insert"></td>
	</tr>
</table>
</form> -->

</body>

</html>