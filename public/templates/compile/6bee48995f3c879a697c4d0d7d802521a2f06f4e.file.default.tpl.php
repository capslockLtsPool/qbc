<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:12:49
         compiled from "./templates/mpos/admin/news/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1607217635530e128131e0f0-54726399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bee48995f3c879a697c4d0d7d802521a2f06f4e' => 
    array (
      0 => './templates/mpos/admin/news/default.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1607217635530e128131e0f0-54726399',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NEWS' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e128147c4e6_19313259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e128147c4e6_19313259')) {function content_530e128147c4e6_19313259($_smarty_tpl) {?><article class="module width_full">
  <header><h3>News Posts</h3></header>
  <ul><li>News posts support the Markdown syntax</li></ul>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>
">
    <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
    <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
    <input type="hidden" name="do" value="add">
    <div class="module_content">
      <fieldset>
        <label>Header</label>
        <input size="30" type="text" name="data[header]" required />
      </fieldset>
      <fieldset>
        <label>Content</label>
        <textarea name="data[content]" rows="5" required></textarea>
      </fieldset>
    </div>
    <footer>
      <div class="submit_link">
        <input type="submit" value="Add" class="alt_btn">
      </div>
    </footer>
  </form>
</article>


<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['news'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['news']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['name'] = 'news';
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['NEWS']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total']);
?>
<article class="module width_full">
  <header><h3><?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['header'];?>
 posted <?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['time'];?>
 by <?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['author'];?>
</h3>
<?php if ($_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['active']==0){?><font size="2px"><font color="red"><b>inactive</b></font><br /><br /><?php }?></header>
  <div class="module_content"><?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['content'];?>
</div>
  <footer>
    <div class="submit_link">
      <a href='<?php echo $_SERVER['PHP_SELF'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=news_edit&id=<?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['id'];?>
'><i class="icon-wrench"></i></a>&nbsp;
      <a href='<?php echo $_SERVER['PHP_SELF'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&do=delete&id=<?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['id'];?>
'><i class="icon-trash"></i></a>
    </div>
  </footer>
</article>
<?php endfor; endif; ?>

<?php }} ?>