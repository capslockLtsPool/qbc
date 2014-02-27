<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:10:40
         compiled from "./templates/mpos/register/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1144101329530e1200a5ecf1-26996494%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba9c57db9ca30753be8f0dad2d7c5ef4e9765204' => 
    array (
      0 => './templates/mpos/register/default.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1144101329530e1200a5ecf1-26996494',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'RECAPTCHA' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e1200b704d6_42974183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e1200b704d6_42974183')) {function content_530e1200b704d6_42974183($_smarty_tpl) {?><article class="module width_quarter">
  <header><h3>Register new account</h3></header>
  <div class="module_content">
  <form action="<?php echo $_SERVER['PHP_SELF'];?>
" method="post">
    <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
<?php if ((($tmp = @$_REQUEST['token'])===null||$tmp==='' ? '' : $tmp)){?>
  <input type="hidden" name="token" value="<?php echo htmlspecialchars($_REQUEST['token'], ENT_QUOTES, 'UTF-8', true);?>
" />
<?php }?>
    <input type="hidden" name="action" value="register">
    <fieldset>
      <label>User</label>
      <input type="text" class="text tiny" name="username" value="<?php echo (($tmp = @htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" maxlength="20" required>
    </fieldset>
    <fieldset>
      <label>REPEAT PASSWD</label>
      <input type="password" class="text tiny" name="password1" value="" size="15" maxlength="20" required>
      <label>REPERAT PASSWD</label>
      <input type="password" class="text tiny" name="password2" value="" size="15" maxlength="20" required>
    </fieldset>
    <fieldset>
      <label>Email</label>
      <input type="text" name="email1" class="text small" value="<?php echo (($tmp = @htmlspecialchars($_POST['email1'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required>
      <label>mail Repeat</label>
      <input type="text" class="text small" name="email2" value="<?php echo (($tmp = @htmlspecialchars($_POST['email2'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required>
    </fieldset>
    <fieldset>
      <label>PIN</label>  <font size="1">4 digit number. Remember this pin!</font> 
      <input type="password" class="text pin" name="pin" value="" size="4" maxlength="4"><!--p value="50"><font size="1" maxlength="14"> (4位数字:提币验证码)</font></p-->
    </fieldset>
    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>

    <footer>
      <div class="submit_link">
        <input type="submit" value="Register" class="alt_btn">
      </div>
    </footer>
  </form>
  </div>
</article>
<?php }} ?>