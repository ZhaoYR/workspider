<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>插入新闻</title>
</head>

<body>

  <?php
include("conn/conn.php");
$select=mysqli_query($conn,"select * from news");           //查询所有新闻信息，供搜索使用
$array=mysqli_fetch_array($select);                       //获取所有新闻信息
?>

  <table align="center" cellpadding="0" cellspacing="0">

    <tr>
      <td valign="bottom" >
        <table align="center">
          <tr>
            <td>
              <div>
                <a href="insert.php">添加新闻</a>
              </div>
            </td>
            <td>
              <div>
                <a href="update.php">管理新闻</a>
              </div>
            </td>
          </tr>
        </table>
      </td>
    </tr>

    <tr>
      <td align="center" valign="middle" >
        <form action="insert_ok.php" method="post" enctype="multipart/form-data" name="form2" id="form2">
          <table width="527" height="300" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td >
                <div align="left">标题：</div>
              </td>
              <td width="415">
                <div align="left">
                  <input name="title" type="text" id="title" size="50" />
                </div>
              </td>
            </tr>

            <tr>
              <td >
                <div align="left">url：</div>
              </td>
              <td width="415">
                <div align="left">
                  <input name="url" type="text" id="url" value = "http://" size="50" />
                </div>
              </td>
            </tr>

             <tr>
              <td >
                <div align="left">来源：</div>
              </td>
              <td width="415">
                <div align="left">
                  <input name="ip" type="text" id="ip" value = "" size="50" />
                </div>
              </td>
            </tr>

            <tr>
              <td>
                <div align="left">时间：</div>
              </td>
              <td>
                <div align="left">
                  <input name="time" type="date" id="time" size="50" />
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left">摘要：</div>
              </td>
              <td>
                <div align="left">
                  <textarea name="content" cols="50" id="content"></textarea>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div align="left">正文：</div>
              </td>
              <td>
                <div align="left">
                  <textarea name="origin" cols="50" id="origin"></textarea>
                </div>
              </td>
            </tr>

            <tr>
              <td colspan="2">
                <div align="center">
                  <input type="submit" name="Submit" value="提交" />
                  <a href="update.php" >
                    <button type = "button">取消</button>
                  </a>
                </div>
              </td>
            </tr>
          </table>
        </form>
      </td>
    </tr>

  </table>

</body>
</html>