<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:04:17
         compiled from "./templates/mpos/dashboard/account_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151753160530e108129d661-35008627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9b175b53c3c97528154fa8c40980aca4ff2fc1c' => 
    array (
      0 => './templates/mpos/dashboard/account_data.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151753160530e108129d661-35008627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'DISABLED_DASHBOARD' => 0,
    'DISABLED_DASHBOARD_API' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e1081331799_98453709',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e1081331799_98453709')) {function content_530e1081331799_98453709($_smarty_tpl) {?><article class="module width_quarter">
  <header><h3>Account Information</h3></header>
    <table class="tablesorter" cellspacing="0">
      <tr>
        <td colspan="2">
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['no_fees']){?>
        You are mining without any pool fees applied and
<?php }elseif($_smarty_tpl->tpl_vars['GLOBAL']->value['fees']>0){?>
        You are mining at <font color="orange"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['fees'], ENT_QUOTES, 'UTF-8', true);?>
%</font> pool fee and
<?php }else{ ?>
        This pool does not apply fees and
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent']>0){?>
        you donate <font color="green"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'], ENT_QUOTES, 'UTF-8', true);?>
%</font>.
<?php }else{ ?>
        you are not <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=edit">donating</a>.
<?php }?>
        </td>
      </tr>
    </table>
    <table class="tablesorter" cellspacing="0">
      <thead>
        <tr><th colspan="2"><b><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Account Balance</b></th></tr>
      </thead>
      <tr>
        <td align="left" style="font-weight: bold;">Confirmed</td>
        <td align="right"><span id="b-confirmed" class="confirmed" style="width: calc(80px); font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['confirmed'];?>
</span></td>
      </tr>
      <tr>
        <td align="left" style="font-weight: bold;">Unconfirmed</td>
        <td align="right"><span id="b-unconfirmed" class="unconfirmed" style="width: calc(80px); font-size: 12px;"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['balance']['unconfirmed'];?>
</span></td>
      </tr>
    </table>
    <?php if (!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD']->value&&!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD_API']->value){?>
    <table class="tablesorter" cellspacing="0">
     <thead>
      <tr>
        <th align="left">Worker</th>
        <th align="right">Hashrate</th>
        <th align="right" style="padding-right: 10px;">Difficulty</th>
      </tr>
      </thead>
      <tbody id="b-workers">
        <td colspan="3" align="center">No worker information available</td>
      </tbody>
      </tr>
    </table>
    <?php }?>
</article>
<?php }} ?>