<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:04:16
         compiled from "./templates/mpos/dashboard/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1078986301530e1080e9fc08-46722784%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47f7d68c4f2b6432a0e13370ad346ec4db9d2c13' => 
    array (
      0 => './templates/mpos/dashboard/default.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1078986301530e1080e9fc08-46722784',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DISABLED_DASHBOARD' => 0,
    'DISABLED_DASHBOARD_API' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e108102b879_15171089',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e108102b879_15171089')) {function content_530e108102b879_15171089($_smarty_tpl) {?><?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)){?>
  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/overview.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/system_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/round_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/account_data.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php if (!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD']->value&&!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD_API']->value){?>
  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/js_api.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php }else{ ?>
  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/js_static.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php }?>
<?php }?>
<?php }} ?>