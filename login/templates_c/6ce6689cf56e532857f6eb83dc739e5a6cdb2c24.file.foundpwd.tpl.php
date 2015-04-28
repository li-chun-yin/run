<?php /* Smarty version Smarty3-b8, created on 2010-11-07 00:16:15
         compiled from "D:/AppServ/www/my 20101130/login/templates/foundpwd.tpl" */ ?>
<?php /*%%SmartyHeaderCode:315044cd5efcf68f913-50795578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ce6689cf56e532857f6eb83dc739e5a6cdb2c24' => 
    array (
      0 => 'D:/AppServ/www/my 20101130/login/templates/foundpwd.tpl',
      1 => 1289088967,
    ),
  ),
  'nocache_hash' => '315044cd5efcf68f913-50795578',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>
<link rel="stylesheet" href="../css/body.css" type="text/css" />
<link rel="stylesheet" href="css/foundpwd.css" type="text/css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/foundpwd.js"></script>
<div id="first">
<table>
<form id="foundname" name="found" method="post" action="#">
  <tr>
    <th colspan="2" align="center">找回密码</th>
  </tr>
  <tr>
    <td align="center">会员名称：</td>
    <td><input id="user" name="user" type="text" class="txt"></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input id="next1" name="next1" type="button" class="btn" value="下一步" onClick="return chkname(foundname)"/></td>
    </tr>
</form>
</table>
</div>
<div id="second" style="display:none;">
<table>
<form id="foundanswer" name="found" method="post" action="#">
  <tr>
    <th colspan="2" align="center"> 找回密码</th>
  </tr>
  <tr>
    <td align="center">密保问题：</td>
    <td><div id="question"></div></td>
  </tr>
  <tr>
    <td align="center">密保答案：</td>
    <td ><input id="answer" name="answer" type="text" class="txt" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input id="next2" name="next2" type="button" class="btn" value="下一步" onClick="return chkanswer(foundanswer)"></td>
    </tr>
</form>
</table>
</div>

<div id='third' style="display:none;">
<table>
<form id="modifypwd" name="found" method="post" action="#">
  <tr>
    <th colspan="2" align="center"> 输入密码</th>
  </tr>
  <tr>
    <td align="center">输入密码：</td>
    <td><input id="pwd1" name="pwd1" type="password" class="txt"></td>
  </tr>
  <tr>
    <td  align="center">确认密码：</td>
    <td ><input id="pwd2" name="pwd2" type="password" class="txt" /></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input id="next2" name="next2" type="button" class="btn" value="完成" onClick="return chkpwd(modifypwd)"></td>
    </tr>
</form>
</table>
</div>
