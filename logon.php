<?php
session_start();
?>
<!DOCTYPE html PUBLIC ">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Welcome Administrator</title>
<link href="fonts.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
table.menu {
	font-size:100%;
	position:absolute;
	visibility:hidden;
	width: 177px;
	background-color: #E5E5E5;
}
-->
</style>


<script type="text/javascript">
function showmenu(elmnt)
{
document.getElementById(elmnt).style.visibility="visible"
}
function hidemenu(elmnt)
{
document.getElementById(elmnt).style.visibility="hidden"
}
</script>

<SCRIPT LANGUAGE="JavaScript">

function put() 
{
var x, y, z,e,f;
x = document.form['En_no'].value;
e='.jpg';
z='Images/';
document.form['img'].value =  z+x+e;

}


</script>

<link href="../fonts.css" rel="stylesheet" type="text/css" />
</head>

<html>

<style type = "text/css">
body{background-image :url(bag.jpg);}
</style>
<?php
if(!isset($_SESSION['userid'])&&!isset($_SESSION['password']))
{ ?>
<CENTER>
<H1><font color="red">YOU ARE NOT A VALID PERSON.........................SORRY</font></H1>
</CENTER>
<?php }
else
{
?>
<body>
<center>
<table>
<tr>
<th>
 <img src="m.jpg" height="100" width="100" alt="logo"  />
</th> 
<TH>
<img src="resultan.jpg" height="90" width="700" alt="logo"  />
</TH>
</table>
</center>
<hr />
<hr/>




<div align="center"></div>
<table width="754" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td  bgcolor="purple" width="750" height="18" align="center" valign="top" class="yellow"><span class="gray"></td>
  </tr>
  <tr class="white">
    <td align="left" valign="top" class="white"><table width="99%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="4%" valign="top">&nbsp;</td>
        <td width="96%" align="left" valign="top">
    <table width="95%" border="0" cellpadding="2" cellspacing="2" class="text_black">
<tr class="gray">
<th>
<p class="text_black_huge"><font size="4">Welcome Administrator</font> </p>
</th>
<th>
<a href="changepass.php"><p class="text_black_huge"><font size="2">Change Password</font> </p></a>
</th>
<th>
<a href="login.php"><p class="text_black_huge"><font size="2">Log out</font> </p>
</th>
</tr>
                </td>
            </tr>
 
          <tr>
              
     <table width="95%" border="0" cellpadding="4" cellspacing="15" class="text_black">
 


                        <tr class="yellow">
                          <td bgcolor="purple"><a href ="addnews.php"><font size="4" font color="white">UPLOAD NEWS</font></a></td>
                        </tr>
                       <tr class="yellow">
                          <td bgcolor="purple"><a href ="enterdetail.php"><font size="4" font color="white">INSERT NEW RECORD</font></a></td>
                        </tr>
<tr class="yellow">
                          <td bgcolor="purple"><a href ="edit.php"><font size="4" font color="white">EDIT</font></a></td>

                        </tr>
<tr class="yellow">
                          <td bgcolor="purple"><a href ="reportr.php"><font size="4" font color="white">GENERATE REPORT</font></a></td>
                        </tr>

 
 
                          
                            </table>
                 
  
</body>
<?php }
?>
</html>				    












