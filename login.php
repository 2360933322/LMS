<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录</title>
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
				<td width="10%" align="center" valign="middle"><a href="" class="a">浏览全部</a></td>
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
    	<td  colspan="9" height="10" align="center"><h1>用户登录</h1></td>
    </tr>
<tr>
    	<td  colspan="9" height="10" >&nbsp;</td>
    </tr>
</table>

			<form method="post" action="checkuser.php">
				
				
					用户名：<input type="text" name="username" />
                                                                                密&nbsp;&nbsp;码：<input type="password" name="password" />
					<input type="submit" value="登录" />
				
			</form>
	
	
</body>
</html>