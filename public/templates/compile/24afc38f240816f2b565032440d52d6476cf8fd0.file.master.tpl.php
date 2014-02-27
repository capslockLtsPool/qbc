<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:03:25
         compiled from "./templates/mpos/master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:831205517530e104d4dbe38-36239307%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24afc38f240816f2b565032440d52d6476cf8fd0' => 
    array (
      0 => './templates/mpos/master.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '831205517530e104d4dbe38-36239307',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'PATH' => 0,
    'CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e104d68c4e9_46656350',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e104d68c4e9_46656350')) {function content_530e104d68c4e9_46656350($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include './include/smarty/libs/plugins/modifier.capitalize.php';
?><!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"/>
	<title><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['title'];?>
 I <?php echo smarty_modifier_capitalize((($tmp = @htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "home" : $tmp));?>
</title>
	
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/layout.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/fontello.css">
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/animation.css">
  <!--[if IE 7]><link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/visualize.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/custom.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/jquery.jqplot.min.css" type="text/css" media="screen" />
	<!--[if lt IE 9]>
	<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/ie.css" type="text/css" media="screen" />
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js" type="text/javascript"></script>
	<!-- script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery-migrate.min.js" type="text/javascript"></script-->
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/hideshow.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.visualize.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.jqplot.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.tablesorter.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.tablesorter.pager.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.equalHeight.js"></script>
        <!-- script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/raphael-min.js"></script-->
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/raphael.2.1.0.min.js"></script>
        <script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/justgage.1.0.1.min.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/custom.js"></script>
  <!--[if IE]><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/excanvas.js"></script><![endif]-->
  
    <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['statistics']['analytics']['enabled']){?>
      <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['statistics']['analytics']['code'];?>

    <?php }?>
    
</head>
<body>
	<header id="header">
    <?php echo $_smarty_tpl->getSubTemplate ("global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</header>
	<section id="secondary_bar">
    <?php echo $_smarty_tpl->getSubTemplate ("global/userinfo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("global/breadcrumbs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</section>
	<aside id="sidebar" class="column">
    <?php echo $_smarty_tpl->getSubTemplate ("global/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	</aside>
	<section id="main" class="column">
    <?php if (is_array((($tmp = @$_SESSION['POPUP'])===null||$tmp==='' ? '' : $tmp))){?>
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['popup'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['name'] = 'popup';
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['loop'] = is_array($_loop=$_SESSION['POPUP']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total']);
?>
        <h4 class="<?php echo (($tmp = @$_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['TYPE'])===null||$tmp==='' ? "info" : $tmp);?>
"><?php echo $_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['CONTENT'];?>
</h4>
      <?php endfor; endif; ?>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['CONTENT']->value!="empty"||$_smarty_tpl->tpl_vars['CONTENT']->value!=''){?><?php if (file_exists((dirname($_smarty_tpl->source->filepath)).("/".((string)$_smarty_tpl->tpl_vars['PAGE']->value)."/".((string)$_smarty_tpl->tpl_vars['ACTION']->value)."/".((string)$_smarty_tpl->tpl_vars['CONTENT']->value)))){?><?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PAGE']->value)."/".((string)$_smarty_tpl->tpl_vars['ACTION']->value)."/".((string)$_smarty_tpl->tpl_vars['CONTENT']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }else{ ?>Missing template for this page<?php }?><?php }?>
		<div class="spacer"></div>
	</section>
  <footer class="footer">
    <?php echo $_smarty_tpl->getSubTemplate ("global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  </footer>
</body>
</html>
<?php }} ?>