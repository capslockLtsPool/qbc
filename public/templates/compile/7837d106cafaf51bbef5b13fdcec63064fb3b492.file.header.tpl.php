<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:03:25
         compiled from "./templates/mpos/global/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:475506758530e104d692f46-64809241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7837d106cafaf51bbef5b13fdcec63064fb3b492' => 
    array (
      0 => './templates/mpos/global/header.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '475506758530e104d692f46-64809241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e104d6ed274_59501233',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e104d6ed274_59501233')) {function content_530e104d6ed274_59501233($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include './include/smarty/libs/plugins/modifier.capitalize.php';
?>    <hgroup>
      <h1 class="site_title"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'])===null||$tmp==='' ? "Unknown Pool" : $tmp);?>
</h1>
      <h2 class="section_title"><?php if ((($tmp = @htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp)){?><?php echo smarty_modifier_capitalize(htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true));?>
<?php }else{ ?><?php echo smarty_modifier_capitalize((($tmp = @htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "home" : $tmp));?>
<?php }?></h2>
    </hgroup>
    <?php echo $_smarty_tpl->getSubTemplate ("login/small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>