<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:03:47
         compiled from "./templates/mpos/admin/settings/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:629796314530e1063b7c1d9-34532849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98e91da1288ecdba0d4950994fbeece71c03654c' => 
    array (
      0 => './templates/mpos/admin/settings/default.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '629796314530e1063b7c1d9-34532849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SETTINGS' => 0,
    'TAB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e1063daab48_89136253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e1063daab48_89136253')) {function content_530e1063daab48_89136253($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include './include/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_function_html_options')) include './include/smarty/libs/plugins/function.html_options.php';
?><article class="module width_full">
  <form method="POST">
    <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
" />
    <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
" />
    <input type="hidden" name="do" value="save" />
    <header>
      <h3 class="tabs_involved">Settings</h3>
      <ul class="tabs">
<?php  $_smarty_tpl->tpl_vars['TAB'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAB']->_loop = false;
 $_from = array_keys($_smarty_tpl->tpl_vars['SETTINGS']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAB']->key => $_smarty_tpl->tpl_vars['TAB']->value){
$_smarty_tpl->tpl_vars['TAB']->_loop = true;
?>
        <li><a href="#<?php echo $_smarty_tpl->tpl_vars['TAB']->value;?>
"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['TAB']->value);?>
</a></li>
<?php } ?>
      </ul>
    </header>
    <div class="tab_container">
<?php  $_smarty_tpl->tpl_vars['TAB'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAB']->_loop = false;
 $_from = array_keys($_smarty_tpl->tpl_vars['SETTINGS']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAB']->key => $_smarty_tpl->tpl_vars['TAB']->value){
$_smarty_tpl->tpl_vars['TAB']->_loop = true;
?>
      <div class="tab_content module_content" id="<?php echo $_smarty_tpl->tpl_vars['TAB']->value;?>
">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['setting'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['name'] = 'setting';
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value]) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total']);
?>
        <fieldset>
          <label><?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['display'];?>
</label>
          <?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['tooltip'])===null||$tmp==='' ? '' : $tmp)){?><span style="font-size: 10px;"><?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['tooltip'];?>
</span><?php }?>
          <?php if ($_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['type']=='select'){?>
            <?php echo smarty_function_html_options(array('name'=>"data[".((string)$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['name'])."]",'options'=>$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['options'],'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['default'] : $tmp)),$_smarty_tpl);?>

          <?php }elseif($_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['type']=='text'){?>
            <input type="text" size="<?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['size'];?>
" name="data[<?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['name'];?>
]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['default'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
          <?php }elseif($_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['type']=='textarea'){?>
          	<textarea name="data[<?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['name'];?>
]" cols="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['size'])===null||$tmp==='' ? "1" : $tmp);?>
" rows="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['height'])===null||$tmp==='' ? "1" : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['default'] : $tmp);?>
</textarea>
          <?php }else{ ?>
            Unknown option type: <?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['type'];?>

          <?php }?>
        </fieldset>
<?php endfor; endif; ?>
      </div>
<?php } ?>
    </div>
    <footer>
      <div class="submit_link">
        <input type="submit" value="Save" class="alt_btn">
      </div>
    </footer>
  </form>
</article>
<?php }} ?>