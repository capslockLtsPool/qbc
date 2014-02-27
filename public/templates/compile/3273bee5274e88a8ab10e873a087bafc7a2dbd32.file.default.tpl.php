<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:04:36
         compiled from "./templates/mpos/login/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1858245259530e1094ecd619-87351301%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3273bee5274e88a8ab10e873a087bafc7a2dbd32' => 
    array (
      0 => './templates/mpos/login/default.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1858245259530e1094ecd619-87351301',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e109501b158_83435305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e109501b158_83435305')) {function content_530e109501b158_83435305($_smarty_tpl) {?><article class="module width_half">
  <form action="<?php echo $_SERVER['PHP_SELF'];?>
?page=login" method="post" id="loginForm">
    <input type="hidden" name="to" value="<?php echo htmlspecialchars(((($tmp = @$_REQUEST['to'])===null||$tmp==='' ? ((string)$_SERVER['PHP_SELF'])."?page=dashboard" : $tmp)), ENT_QUOTES, 'UTF-8', true);?>
" />
    <header><h3>Login</h3></header>
    <div class="module_content">
        <fieldset>
          <label>User or Email</label>
          <input type="text" name="username" size="22" maxlength="100" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['username'])===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" placeholder="Your username or email" required />
        </fieldset>
        <fieldset>
          <label>Password</label>
          <input type="password" name="password" size="22" maxlength="100" placeholder="Your password" required />
        </fieldset>
      <div class="clear"></div>
    </div>
    <footer>
      <div class="submit_link">
        <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=password"><font size="1">Forgot your password?</font></a>
        <input type="submit" value=Login" class="alt_btn" />
      </div>
    </footer>
  </form>
</article>
<?php }} ?>