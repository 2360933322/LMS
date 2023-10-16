<?php
//header("content-type:text/html;charset=utf-8");//设置页面编码格式
session_start();			//初始化SESSION变量
if(!(isset($_SESSION['user']) and isset($_SESSION['pass']))){		//判断SESSION变量的值是否存在
echo "<script>alert('您不具备访问本页面的权限!');window.location.href='login.php';</script>";}		//调用外部文件
else
     {
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>浏览全部图书信息</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
<script>
//删除确认
function confirmdel(){
 if(!window.confirm('是否要删除数据??'))
	return false;
}
//全部选择/取消
function multiselect(){
	 var leng = this.form1.chk.length;
	       for( var i = 0; i < leng; i++)
	   	
	      		document.form1.chk[i].checked = !document.form1.chk[i].checked;
			}
</script>
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
    	<td  colspan="9" height="10" align="center"><h1>浏览全部图书信息</h1></td>
    </tr>
<tr>
    	<td  colspan="9" height="10" >&nbsp;</td>
    </tr>
</table>
<table width="1452" height="200" border="0" cellpadding="0" cellspacing="0">
<form name="form1" id="form1" method="post" action="delall.php">
    <tr>
      <td align="center" valign="middle">
<?php
include_once("conn/conn.php");//包含数据库连接文件
?>
<table width="100%"  border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#CCCCCC">
  <tr>
    <td width="10%" align="center" ><input type="button" value="全选/反选" onclick = 'multiselect();'></td>	
    <td width="10%" align="center" >图书编号</td>
    <td width="18%" align="center" >书名</td>
    <td width="10%" align="center" >价格</td>
    <td width="15%" align="center" >出版单位</td>
    <td width="10%" align="center" >编著</td>
    <td width="10%" align="center" >出版时间</td>
    <td width="10%" align="center" >类别</td>
    <td width="12%" align="center" >操作</td>
  </tr>
<?php
	$pagesize = 6 ;				           //每页显示记录数
	$sqlstr = "select * from books order by bookid";                  //定义查询语句
	$total = mysqli_query($conn,$sqlstr);                                   //执行查询语句
	$totalNum = mysqli_num_rows($total);		          //总记录数
	$pagecount = ceil($totalNum/$pagesize);		          //总页数
	(!isset($_GET['page']))?($page = 1):$page = $_GET['page'];   //当前显示页数
	($page <= $pagecount)?$page:($page = $pagecount);       //当前页大于总页数时把当前页定义为总页数
	$f_pageNum = $pagesize * ($page - 1);		          //当前页的第一条记录
	$sqlstr1 = $sqlstr." limit ".$f_pageNum.",".$pagesize;          //定义SQL语句，通过limit关键字控制查询范围和数量
	$result = mysqli_query($conn,$sqlstr1);		          //执行查询语句
    while ($rows = mysqli_fetch_array($result)){		          //循环输出查询结果
?>
  <tr bgcolor="#FFFFFF" align="center" >
    <td width="10%"><?php echo "<input type=checkbox name='chk[]' id='chk' value=".$rows[0].">";?></td>
    <td width="10%"><?php echo $rows['bookid'];?></td>
    <td width="18%" ><?php echo $rows['bookname'];?></td>
    <td width="10%" ><?php echo $rows['bookprice'];?></td>
    <td width="15%" ><?php echo $rows['press'];?></td>
    <td width="10%" ><?php echo $rows['writer'];?></td>
    <td width="10%" ><?php echo $rows['presstime'];?></td>
    <td width="10%" ><?php echo $rows['booktype'];?></td>
    <td width="12%"><?php echo "<a href=editform2.php?bookid=".$rows[0].">修改</a>/<a href=delete2.php?bookid=".$rows[0].">删除</a>";?></td>
  </tr>
<?php	
	}
?>
  <tr>
<td height="25" colspan="9" align="left" bgcolor="#FFFFFF">&nbsp;&nbsp;<input type="submit" value="删除选择" onclick = 'return confirmdel();'>&nbsp;&nbsp;&nbsp;&nbsp;
<?php
    echo "共".$totalNum."本图书&nbsp;&nbsp;";
	echo "第".$page."页/共".$pagecount."页&nbsp;&nbsp;";
	if($page!=1){//如果当前页不是1则输出有链接的首页和上一页
	    echo "<a href='?page=1'>首页</a>&nbsp;";
		echo "<a href='?page=".($page-1)."'>上一页</a>&nbsp;&nbsp;";
	}else{//否则输出没有链接的首页和上一页
	    echo "首页&nbsp;上一页&nbsp;&nbsp;";
	}
	if($page!=$pagecount){//如果当前页不是最后一页则输出有链接的下一页和尾页
	    echo "<a href='?page=".($page+1)."'>下一页</a>&nbsp;";
		echo "<a href='?page=".$pagecount."'>尾页</a>&nbsp;&nbsp;";
	}else{//否则输出没有链接的下一页和尾页
	    echo "下一页&nbsp;尾页&nbsp;&nbsp;";
	}}
?>
    </td>	

  </tr>
</form>
</table>
 </td>
    </tr>
</table>
<table width="1452" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="8" >&nbsp;</td>
    </tr>
    <tr>
      <td height="64" background="images/bottombanner.jpg">&nbsp;</td>
    </tr>
</table>
</center>
</body>
</html>
