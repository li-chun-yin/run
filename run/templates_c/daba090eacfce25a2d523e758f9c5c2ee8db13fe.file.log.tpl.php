<?php /* Smarty version Smarty3-b8, created on 2010-11-08 08:13:13
         compiled from "D:/AppServ/www/my 20101130/run/templates/log.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314324cd7b119b04fc0-20670171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'daba090eacfce25a2d523e758f9c5c2ee8db13fe' => 
    array (
      0 => 'D:/AppServ/www/my 20101130/run/templates/log.tpl',
      1 => 1289203991,
    ),
  ),
  'nocache_hash' => '314324cd7b119b04fc0-20670171',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>跑步日志</title>
</head>

<body>
	<h1>跑步日志</h1>
	<div id="log">
	<?php include_once ('D:\AppServ\www\My 20101130\run\reckon.php');?>

		<ul>
<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('log_arr')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['item']->key;
?>
			<li<?php if ($_smarty_tpl->getVariable('item')->value[4]!=''){?> onmouseover='document.getElementById("logp<?php echo $_smarty_tpl->getVariable('key')->value;?>
").style.display="block";' onmouseout='document.getElementById("logp<?php echo $_smarty_tpl->getVariable('key')->value;?>
").style.display="none";' style="color:#008000"<?php }?>>
				<?php echo $_smarty_tpl->getVariable('item')->value[0];?>
: 共跑了<?php echo $_smarty_tpl->getVariable('item')->value[1];?>
,用时<?php echo $_smarty_tpl->getVariable('item')->value[2];?>
,平均每一千米需要跑<?php echo $_smarty_tpl->getVariable('item')->value[3];?>
。
				<?php if ($_smarty_tpl->getVariable('item')->value[4]!=''){?><p id="logp<?php echo $_smarty_tpl->getVariable('key')->value;?>
" style="display:none;" class="logp"><?php echo $_smarty_tpl->getVariable('item')->value[4];?>
</p><?php }?>
			</li>
<?php }} ?>
		</ul>
		<div id="logz">
		<a href="?thispage=log&page=1">首页</a><a href="?thispage=log&page=<?php echo $_smarty_tpl->getVariable('page')->value-1;?>
">&lt;&lt;</a>
<?php ob_start();?><?php echo $_smarty_tpl->getVariable('page')->value-10;?>
<?php $_tmp1=ob_get_clean();?><?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['section1']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['name'] = 'section1';
$_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('lastpage')->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['start'] = (int)$_tmp1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['max'] = (int)20;
$_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['show'] = true;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['max'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['step'] = 1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['start'] < 0)
    $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['start'] = max($_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['step'] > 0 ? 0 : -1, $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['loop'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['start']);
else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['start'] = min($_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['loop'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['loop']-1);
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['max']);
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['section1']['total']);
?>
			<a href="?thispage=log&page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['section1']['index_next'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['section1']['index_next']==$_smarty_tpl->getVariable('page')->value){?>style="color:green;"<?php }?>><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['section1']['index_next'];?>
</a> 
<?php endfor; endif; ?>
		 <a href="?thispage=log&page=<?php echo $_smarty_tpl->getVariable('page')->value+1;?>
">&gt;&gt;</a><a href="?thispage=log&page=<?php echo $_smarty_tpl->getVariable('lastpage')->value;?>
">尾页</a>
		</div>
	</div>
</body>
</html>
