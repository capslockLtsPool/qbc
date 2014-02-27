<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:04:17
         compiled from "./templates/mpos/dashboard/round_shares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:188223420530e1081156f62-94148853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bbe1e48e3f0a1b883e2f4c86e06fb2e0e018dfb' => 
    array (
      0 => './templates/mpos/dashboard/round_shares.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188223420530e1081156f62-94148853',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'ESTIMATES' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e10811972d4_47089329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e10811972d4_47089329')) {function content_530e10811972d4_47089329($_smarty_tpl) {?>         <tr>
           <td colspan="2"><b><u>Round Shares</u></b> <span id='tt'><img src='<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/images/questionmark.png' height='15px' width='15px' title='Submitted shares since last found block (ie. round shares)'></span></td>
         </tr>
         <tr>
           <td><b>Est. Shares</b></td>
           <td id="b-target" class="right"><?php echo $_smarty_tpl->tpl_vars['ESTIMATES']->value['shares'];?>
 (done: <?php echo $_smarty_tpl->tpl_vars['ESTIMATES']->value['percent'];?>
%)</td>
         </tr>
         <tr>
           <td><b>Pool Valid</b></td>
           <td id="b-pvalid" class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid'];?>
</td>
         </tr>
         <tr>
           <td><b>Your Valid<b></td>
           <td id="b-yvalid" class="right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid'];?>
</td>
         </tr>
         <tr>
           <td><b>Pool Invalid</b></td>
		   <td ><?php echo "0 (0.00%)";?>
</td>
         </tr>
         <tr>
           <td><b>Your Invalid</b></td>
		   <td ><?php echo "0 (0.00%)";?>
</td>
         </tr>
<?php }} ?>