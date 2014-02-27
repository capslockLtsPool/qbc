<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:03:25
         compiled from "./templates/mpos/global/userinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1629575495530e104d72c735-14109296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ad4ecc0570d36f5d354d7eac0b75cf13124eccf4' => 
    array (
      0 => './templates/mpos/global/userinfo.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1629575495530e104d72c735-14109296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e104d758911_65848761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e104d758911_65848761')) {function content_530e104d758911_65848761($_smarty_tpl) {?>    <div class="user">
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)){?>
            <p>Welcome <?php echo htmlspecialchars($_SESSION['USERDATA']['username'], ENT_QUOTES, 'UTF-8', true);?>
</p>
<?php }else{ ?>
            <p>Welcome</p>
<?php }?>
    </div>
<?php }} ?>