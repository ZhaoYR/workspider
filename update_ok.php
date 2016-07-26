<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>修改新闻</title>

<body>
  <?php
include("conn/conn.php");

  if(isset($_GET['id']) and $_GET['id']!=null){
  $select=mysqli_query($conn,"select * from news where id='".$_GET['id']."'");
  $array=mysqli_fetch_array($select);
}

?>

  <table width="500" height="500" border="0" align="center" cellpadding="0" cellspacing="0" >

    <tr>
      <td>
        <table align="center">
          <tr>

            <td>
              <div align="center">
                <a href="insert.php">添加新闻</a>
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
      <td align="center" valign="middle" >
        <form action="update_ok_ok.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
          <table cellpadding="0" cellspacing="0">
            <tr>
              <td>
                <div align="left" width="30">标题：</div>
              </td>
              <td>
                <div align="left">
                  <input name="title" type="text" id="title" value="<?php echo $array['title'];?>" size="50" /></div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left" widthe="30">url：</div>
              </td>
              <td>
                <div align="left">
                  <input name="url" type="text" id="url" value="<?php echo $array['url'];?>" size="50" /></div>
              </td>
            </tr>
             <tr>
              <td>
                <div align="left" widthe="30">来源</div>
              </td>
              <td>
                <div align="left">
                  <input name="ip" type="text" id="ip" value="<?php echo $array['ip'];?>" size="50" /></div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left" width="30">时间：</div>
              </td>
              <td>
                <div align="left">
                  <input name="time" type="date" id="time" value="<?php $array['time']=substr($array['time'], 0, 10); echo $array['time'];?>" size="50" /></div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left" width="30">摘要：</div>
              </td>
              <td>
                <div align="left">
                  <textarea name="content" rows="10" cols="100" id="content">
                    <?php echo $array['content'];?></textarea>
                </div>
              </td>
            </tr>
            <tr>
               <td>
                <div align="left" width="30">正文：</div>
              </td>
              <td>
                <div align="left">
                   <?php echo $array['content'];?>
                </div>
              </td>
            </tr>
            <tr>
              <td colspan="2">
                <div align="center">
                  <input type="submit" name="Submit" value="提交" />
                  <input type="reset" name="Submit2" value="重置" />
                  <input type="hidden" name="id" value="<?php echo $array['id'];?>
                  "/>
                  <!--隐藏域--> </div>
              </td>
            </tr>
          </table>
        </form>
      </td>
    </tr>

  </table>

</body>
</html>