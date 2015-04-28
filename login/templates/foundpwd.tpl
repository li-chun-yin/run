<title>{$title}</title>
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
