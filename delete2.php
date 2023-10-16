<?php
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
include_once("conn/conn.php");//连接数据库
if ($_GET['bookid'] )	//判断用户是否提交了要删除的图书编号
     {	$sql = "delete from books where bookid = '".$_GET['bookid']."'";//定义删除语句		
	$result = mysqli_query($conn,$sql);		                    //执行删除操作
	if ($result)
	      {echo "图书编号为".$_GET['bookid']."的数据记录已删除成功<a href='index.php'>点击这里返回首页</a>";}
                else{echo "删除失败";	}
     }
else
    {echo "<a href='searchel.php'>请输入要删除的图书编号</a>";}
?>
