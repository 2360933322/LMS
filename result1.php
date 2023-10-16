<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>


<body>
<center>
<table width="1452" border="0" cellpadding="0" cellspacing="0">
    <tr>
    	<td  colspan="9" height="109" background="images/Topbanner.jpg">&nbsp;</td>
    </tr>
    <tr>
    	<td  colspan="9" height="10" >&nbsp;</td>
    </tr>
	<tr>
		
				<td width="10%" align="center" valign="middle">
				<b><?php echo date("Y-m-d");?></b></td>
				<td width="10%" align="center" valign="middle"><a href="index.php" class="a">浏览全部</a></td>
				<td width="10%" align="center" valign="middle"><a href="add_book.php">添加图书</a></td>
				<td width="15%" align="center" valign="middle"><a href="search1.php">精确查询（按图书编号）</a></td>
                                                                <td width="15%" align="center" valign="middle"><a href="search2.php">模糊查询（按图书书名）</a></td>
				<td width="10%" align="center" valign="middle"><a href="searchedit.php">图书信息修改</a></td>
                                                                <td width="10%" align="center" valign="middle"><a href="searchdel.php">图书删除</a></td>
				<td width="10%" align="center" valign="middle"><a href="#">统计</a></td>
				<td width="10%" align="center" valign="middle"><a href="logout.php">退出系统</a></td>
			
	</tr>
<tr>
    	<td  colspan="9" height="10" >&nbsp;</td>
    </tr>
    <tr>
    	<td  colspan="9" height="10" align="center"><h1>查询图书的结果为：</h1></td>
    </tr>
<tr>
    	<td  colspan="9" height="10" >&nbsp;</td>
    </tr>
</table>
	<?php
		include_once("conn/conn.php");
		$sql = "select * from books where bookid = '".$_POST['bookid']."'";
		
		$result = mysqli_query($conn,$sql);
		
		
		
		if (mysqli_num_rows($result)>0)
{$row=mysqli_fetch_array($result,MYSQLI_NUM);
?>
<table width="500" border="0" cellpadding="0" cellspacing="0">
    <tr>  	<td>图书编号</td><td><?=$row[0]?></td>    </tr>
    <tr>  	<td>图书书名</td><td><?=$row[1]?></td>    </tr>
    <tr>  	<td>图书价格</td><td><?=$row[2]?></td>    </tr>
    <tr>  	<td>图书编著</td><td><?=$row[3]?></td>    </tr>
   <tr>  	<td>图书出版单位</td><td><?=$row[4]?></td>    </tr>
   <tr>  	<td>图书出版时间</td><td><?=$row[5]?></td>    </tr>
   <tr>  	<td>图书类别</td><td><?=$row[6]?></td>    </tr>
</table>
<?php
echo "<br><a href='search1.php'>返回继续查询</a>";
} 
    else
   {echo "没有查找到符合条件的数据记录,<a href='search1.php'>返回继续查询</a>";}
?>
</body>
</html>