<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:11:54
         compiled from "./templates/mpos/admin/user/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1134205851530e124a0a1e33-17161038%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83308c242e60a2b667fb21822e2b1e553f402d3a' => 
    array (
      0 => './templates/mpos/admin/user/default.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1134205851530e124a0a1e33-17161038',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'USERS' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e124a3c8432_00860240',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e124a3c8432_00860240')) {function content_530e124a3c8432_00860240($_smarty_tpl) {?><script language="javascript">
    function storeFee(id) {
      $.ajax({
       type: "POST",
       url: "<?php echo $_SERVER['PHP_SELF'];?>
",
       data: "page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&do=fee&account_id=" + id,
     });
    }
    function storeLock(id) {
      $.ajax({
       type: "POST",
       url: "<?php echo $_SERVER['PHP_SELF'];?>
",
       data: "page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&do=lock&account_id=" + id,
     });
    }
    function storeAdmin(id) {
      $.ajax({
       type: "POST",
       url: "<?php echo $_SERVER['PHP_SELF'];?>
",
       data: "page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&do=admin&account_id=" + id,
     });
    }
</script>


<article class="module width_full">
  <header>
    <h3>User Information</h3>
    <div class="submit_link"><?php echo $_smarty_tpl->getSubTemplate ("global/pagination.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div>
  </header>
<table width="100%" class="tablesorterpager">
  <thead>
    <tr>
      <th align="center">ID</th>
      <th align="left">Username</th>
      <th align="left">E-Mail</th>
      <th align="right">Shares&nbsp;&nbsp;</th>
      <th align="right">Hashrate&nbsp;&nbsp;</th>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps'){?>
      <th align="right">Est. Donation&nbsp;&nbsp;</th>
      <th align="right">Est. Payout&nbsp;&nbsp;&nbsp;</th>
<?php }else{ ?>
      <th align="right" colspan="2">Est. 24 Hours&nbsp;&nbsp;&nbsp;</th>
<?php }?>
      <th align="right">Balance&nbsp;&nbsp;&nbsp;</th>
      <th align="center">Admin</th>
      <th align="center">Locked</th>
      <th align="center">No Fees</th>
    </tr>
  </thead>
  <tbody>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=(($tmp = @$_smarty_tpl->tpl_vars['USERS']->value)===null||$tmp==='' ? '' : $tmp)) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
    <tr>
      <td align="center"><?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
</td>
      <td align="left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['username'], ENT_QUOTES, 'UTF-8', true);?>
</td>
      <td align="left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
      <td align="right"><?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['shares']['valid'];?>
</td>
      <td align="right"><?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['hashrate'];?>
</td>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps'){?>
      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['estimates']['donation'],"8");?>
</td>
      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['estimates']['payout'],"8");?>
</td>
<?php }else{ ?>
      <td align="right" colspan="2"><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['estimates']['hours24'],"8");?>
</td>
<?php }?>
      <td align="right"><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['balance'],"8");?>
</td>
      <td align="center">
        <input type="hidden" name="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="0"/>
        <input type="checkbox" onclick="storeAdmin(<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
)" name="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="1" id="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['is_admin']){?>checked<?php }?> />
        <label for="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]"></label>
      </td>
      <td align="center">
        <input type="hidden" name="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="0"/>
        <input type="checkbox" onclick="storeLock(<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
)" name="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="1" id="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['is_locked']){?>checked<?php }?> />
        <label for="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]"></label>
      </td>
      <td align="center">
        <input type="hidden" name="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="0"/>
        <input type="checkbox" onclick="storeFee(<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
)" name="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="1" id="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['no_fees']){?>checked<?php }?> />
        <label for="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]"></label>
      </td>
    </tr>
<?php endfor; else: ?>
  <tr>
    <td colspan="10"></td>
  </tr>
<?php endif; ?>

  </tbody>
  <tfoot>
    <tr>
      <th align="center">ID</th>
      <th align="left">Username</th>
      <th align="left">E-Mail</th>
      <th align="right">Shares&nbsp;&nbsp;</th>
      <th align="right">Hashrate&nbsp;&nbsp;</th>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps'){?>
      <th align="right">Est. Donation&nbsp;&nbsp;</th>
      <th align="right">Est. Payout&nbsp;&nbsp;&nbsp;</th>
<?php }else{ ?>
      <th align="right" colspan="2">Est. 24 Hours&nbsp;&nbsp;&nbsp;</th>
<?php }?>
      <th align="right">Balance&nbsp;&nbsp;&nbsp;</th>
      <th align="center">Admin</th>
      <th align="center">Locked</th>
      <th align="center">No Fees</th>
    </tr>
  </tfoot>
</table>
  <footer>
    <div class="submit_link">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="POST" id='query'>
      <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
      <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
      <input type="text" class="pin" name="query" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['query'])===null||$tmp==='' ? "%" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
">
      <input type="submit" value="Query" class="alt_btn">
    </form>
    </div>
  </footer>
</article>
<?php }} ?>