<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:03:25
         compiled from "./templates/mpos/global/breadcrumbs.tpl" */ ?>
<?php /*%%SmartyHeaderCode:444480624530e104d75d0b7-65285449%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '054cabf394ba50ea06ddba9f20991f2339790298' => 
    array (
      0 => './templates/mpos/global/breadcrumbs.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '444480624530e104d75d0b7-65285449',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e104d81cc65_32627085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e104d81cc65_32627085')) {function content_530e104d81cc65_32627085($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include './include/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_capitalize')) include './include/smarty/libs/plugins/modifier.capitalize.php';
?>    <div class="breadcrumbs_container">
      <article class="breadcrumbs"><a href="<?php echo $_SERVER['PHP_SELF'];?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'])===null||$tmp==='' ? "Unknown Pool" : $tmp);?>
</a> <div class="breadcrumb_divider"></div> <a class="<?php if (!(($tmp = @$_REQUEST['action'])===null||$tmp==='' ? '' : $tmp)){?>current<?php }?>" <?php if ((($tmp = @$_REQUEST['action'])===null||$tmp==='' ? '' : $tmp)){?>href="<?php echo $_SERVER['PHP_SELF'];?>
?page=<?php echo smarty_modifier_replace(htmlspecialchars((($tmp = @$_REQUEST['page'])===null||$tmp==='' ? "home" : $tmp), ENT_QUOTES, 'UTF-8', true),'"','');?>
"<?php }?>><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_capitalize((($tmp = @htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "Home" : $tmp)), ENT_QUOTES, 'UTF-8', true),'"','');?>
</a><?php if ((($tmp = @$_REQUEST['action'])===null||$tmp==='' ? '' : $tmp)){?> <div class="breadcrumb_divider"></div> <a class="current"><?php echo smarty_modifier_replace(htmlspecialchars(smarty_modifier_capitalize(htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true)), ENT_QUOTES, 'UTF-8', true),'"','');?>
</a><?php }?></article>
    </div>
<?php }} ?>