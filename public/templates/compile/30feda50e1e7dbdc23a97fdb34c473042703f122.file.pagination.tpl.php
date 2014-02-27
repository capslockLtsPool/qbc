<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:11:54
         compiled from "./templates/mpos/global/pagination.tpl" */ ?>
<?php /*%%SmartyHeaderCode:842473045530e124a3d3b08-25091792%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30feda50e1e7dbdc23a97fdb34c473042703f122' => 
    array (
      0 => './templates/mpos/global/pagination.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '842473045530e124a3d3b08-25091792',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e124a3f61d9_22766170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e124a3f61d9_22766170')) {function content_530e124a3f61d9_22766170($_smarty_tpl) {?><div id="pager<?php echo (($tmp = @$_smarty_tpl->tpl_vars['ID']->value)===null||$tmp==='' ? '' : $tmp);?>
">
  <form>
    <i class="icon-fast-backward"></i>
    <i class="icon-backward"></i>
    <input type="text" class="pagedisplay"/>
    <i class="icon-forward"></i>
    <i class="icon-fast-forward"></i>
    <select class="pagesize">
      <option selected="selected"  value="10">10</option>
      <option value="20">20</option>
      <option value="30">30</option>
      <option  value="40">40</option>
    </select>
  </form>
</div>
<?php }} ?>