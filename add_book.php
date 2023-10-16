<?php
//header("content-type:text/html;charset=utf-8");//设置页面编码格式
session_start();			//初始化SESSION变量
if(!(isset($_SESSION['user']) and isset($_SESSION['pass']))){		//判断SESSION变量的值是否存在
echo "<script>alert('您不具备访问本页面的权限!');window.location.href='login.php';</script>";}		//调用外部文件
else
     {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<link rel="stylesheet" type="text/css" href="mystyle.css">

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
    	<td  colspan="9" height="10" align="center"><h1>添加图书</h1></td>
    </tr>
<tr>
    	<td  colspan="9" height="10" >&nbsp;</td>
    </tr>
</table>
		<div class='bg'>
		<div class='container'>
			<form method="post" action="book_insert.php">
				
				<table border="0" style="width:50%;margin:10px auto;" cellspacing="5" cellpadding="3">
					
					<tr>
						<td><label>图书编号:</label></td>
						<td><input type="text" name="b_id" /></td>
					</tr>
                                                                                
                                                                                <tr>
						<td><label>书名:</label></td>
						<td><input type="text" name="b_name" /></td>
					</tr>
					<tr>
						<td><label>价格:</label></td>
						<td><input type="number" name="b_price" /></td>
					</tr>
                                                                                <tr>
						<td><label>出版社:</label></td>
						<td><input type="text" name="b_press" /></td>
					</tr>
                                                                                 <tr>
						<td><label>编著:</label></td>
						<td><input type="text" name="b_writer" /></td>
					</tr>
					<tr>
						<td><label>出版时间:</label></td>
						<td><input type="datetime" name="b_date" /></td>
					</tr>
					<tr>
						<td><label>类别:</label></td>
						<td>
							<select style="width:50%;height:28px;border-radius:5px 0 5px 0;border:1px solid;" style="height:25px;width:80px;" name="b_type">
								<option>自然科学</option>
								<option>社会科学</option>
								<option>人文科学</option>
								<option>季刊杂志</option>
                                                                                                                                <option>IT</option>
                                                                                                                                <option>励志</option>
							</select>
						</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td>
							<input type="submit" value="添加"  style="margin-right:40px;width:60px;height:30px;text-align:cneter;" />
							<input type="submit" value="清除" style="width:60px;height:30px;text-align:cneter;" />
						</td>
					</tr>
				</table>
			</form>
		</div>
		</div>
	</div>
<?php	
	}
?>
</body>
</html>
