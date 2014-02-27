<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:12:51
         compiled from "./templates/mpos/gettingstarted/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1310279939530e12830383d8-21023037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '404a9e2eb951ec04a773cfe47df7e50280805e87' => 
    array (
      0 => './templates/mpos/gettingstarted/default.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1310279939530e12830383d8-21023037',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SITESTRATUMPORT' => 0,
    'GLOBAL' => 0,
    'SITECOINNAME' => 0,
    'SITECOINURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e128312a920_47170843',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e128312a920_47170843')) {function content_530e128312a920_47170843($_smarty_tpl) {?><article class="module width_full">
  <header><h3>Getting Started Guide</h3></header>
  <div class="module_content">
    <li>1. <strong>Create account</strong>
      <ul>
        <li>Register here, or login if you have account<a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=register">(register)</a></li>
        <li>Create a workder that will be used by the miner to login<a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=workers">(add worker)</a>Using CPUminer or quarkminer</li>
      </ul>
    </li>
    <li>2. <strong>Download a miner</strong>
      <ul>

	   <li><em>CPU Miner Mac/Linux/Windows:</em> <a href="https://bitcointalk.org/index.php?topic=55038.msg654850#msg654850" target="_blank">click here for download</a>.</li>
      </ul>
    </li>
    <li>3. <strong>Configure your miner</strong>
      <table width="30%">
        <tbody>
          <tr><td>STRATUM:</td><td><kbd>stratum+tcp://<?php echo $_SERVER['SERVER_NAME'];?>
</kbd></td></tr>
          <tr><td>PORT:</td><td><kbd><?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMPORT']->value)===null||$tmp==='' ? "3333" : $tmp);?>
</kbd></td></tr>
          <!--tr><td>Username:</td><td><kbd><em>Weblogin</em>.<em>Worker</em></kbd></td></tr>
          <tr><td>Password:</td><td><kbd>Worker Password</kbd></td></tr-->
        </tbody>
      </table>
      <p>Configure CPUminerminer as follows:</p>
	
      <pre>./minerd  -a quark<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='scrypt'){?>--scrypt <?php }?> -o stratum+tcp://<?php echo $_SERVER['SERVER_NAME'];?>
:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMPORT']->value)===null||$tmp==='' ? "3333" : $tmp);?>
 -u <em>username </em>.<em>worker</em> -p <em>passwd</em> -t threadsnum </pre>
      <!--p>If you want, you can create additional workers with usernames and passwords of your choice <a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=workers">Here</a></p-->
    </li>
    <!--li>4. <strong>Create a <?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINNAME']->value)===null||$tmp==='' ? "Litecoin" : $tmp);?>
 address to recieve payments.</strong>
      <ul>
        <li> Downloading the client &amp; block chain: 	Download the <?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINNAME']->value)===null||$tmp==='' ? "Litecoin" : $tmp);?>
 client from <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINURL']->value)===null||$tmp==='' ? "http://www.litecoin.org" : $tmp);?>
" target="_blank">here</a>.
          <p>Generate a new address and input it on your account page to receive payments.</p>
        </li>
      </ul>
    </li>
    <li>5. <strong>Advanced cgminer settings / FAQ</strong>
      <ul>
        <li><a href="https://github.com/ckolivas/cgminer/blob/master/SCRYPT-README" target="_blank">Scrypt readme</a></li>
        <li>Don't set <b>intensity</b> too high, I=11 is standard and safest. Higher intensity takes more GPU RAM. Check for <b>hardware errors</b> in cgminer (HW). HW=0 is good, otherwise lower intensity :)</li>
        <li>Set shaders according to the readme (or look at your graphic cards specifications). Cgminer uses this value at first run to calculate <b>thread-concurrency</b>. Easiest way to get this optimized is to use same settings as others have used here: <a href="http://litecoin.info/Mining_Hardware_Comparison">here</a>.</li>
        <li>There's also an interesting project which gives you a GUI for cgminer. Windows only it seems.</li>
        <li>Here's a great <a href="https://docs.google.com/document/d/1Gw7YPYgMgNNU42skibULbJJUx_suP_CpjSEdSi8_z9U/preview?sle=true" target="_blank">guide</a> how to get up and running with Xubuntu.</li>
      </ul>
    </li-->
  </div>
</article>
<?php }} ?>