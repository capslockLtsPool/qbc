<?php /* Smarty version Smarty-3.1.13, created on 2014-02-27 00:03:25
         compiled from "./templates/mpos/global/navigation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:738145457530e104d823df5-17605165%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22412f73ff56d100263e8e5c0122889635e94214' => 
    array (
      0 => './templates/mpos/global/navigation.tpl',
      1 => 1393430428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '738145457530e104d823df5-17605165',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_530e104db93d14_92356577',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530e104db93d14_92356577')) {function content_530e104db93d14_92356577($_smarty_tpl) {?>    <hr/>
    <li class="icon-home"><a href="<?php echo $_SERVER['PHP_SELF'];?>
">Home</a></li>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1){?>
    <h3>Account</h3>
    <ul class="toggle">
      <li class="icon-gauge"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=dashboard">Dashboard</a></li>
      <li class="icon-user"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=edit">Edit Account</a></li>
      <li class="icon-photo"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=workers">My Work</a></li>
      <li class="icon-indent-left"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=transactions">Transaction</a></li>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_notifications']){?><!--li class="icon-megaphone"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=notifications">Notifications</a></li><?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_invitations']){?><li class="icon-plus"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=invitations">Invitations</a></li><?php }?>
      <li class="icon-barcode"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=account&action=qrcode">QR Codes</a></li-->
    </ul>
    </li>
    <?php }?>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1&&$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin']==1){?>
    <h3>Admin Panel</h3>
    <ul class="toggle">
      <li class="icon-bell"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=monitoring">Monitoring</a></li>
      <li class="icon-torso"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=user">User Info</a></li>
      <li class="icon-money"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=wallet">Wallet Info</a></li>
      <li class="icon-exchange"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=transactions">Transactions</a></li>
      <li class="icon-cog"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=settings">Settings</a></li>
      <li class="icon-doc"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=news">News</a></li>
      <li class="icon-chart"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=reports">Reports</a></li>
      <li class="icon-photo"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=poolworkers">Pool Workers</a></li>
      <li class="icon-pencil"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=admin&action=templates">Templates</a></li>
    </ul>
    <?php }?>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)){?>
    <h3>Statistics</h3>
    <ul class="toggle">
      <li class="icon-align-left"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=pool">Pool</a></li>
      <li class="icon-th-large"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=blocks">Blocks</a></li>
      <li class="icon-chart"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=graphs">Graphs</a></li>
      <li class="icon-record"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=round">Round</a></li>
      <li class="icon-search"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=blockfinder">Finder</a></li>
      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['monitoring_uptimerobot_api_keys'])===null||$tmp==='' ? "0" : $tmp)){?><!--li class="icon-bell"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=uptime">Uptime</a></li--><?php }?>
    </ul>
    <?php }else{ ?>
    <h3>Statistics</h3>
    <ul class="toggle">
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['pool']['statistics']){?>
     <li class="icon-align-left"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=pool">Pool</a></li>
     <?php }else{ ?>
     <li class="icon-align-left"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics">Statistics</a>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['block']['statistics']){?>
     <li class="icon-th-large"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=blocks">Blocks</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['round']['statistics']){?>
     <li class="icon-chart"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=round">Round</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['blockfinder']['statistics']){?>
     <li class="icon-search"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=blockfinder">Finder</a></li>
     <?php }?>
     <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['acl']['uptime']['statistics']){?>
     <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['monitoring_uptimerobot_api_keys'])===null||$tmp==='' ? "0" : $tmp)){?><!--li class="icon-bell"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=statistics&action=uptime">Uptime</a></li--><?php }?>
     <?php }?>
    </ul>
    <?php }?>
    <h3>Help</h3>
    <ul class="toggle">
      <li class="icon-desktop"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=gettingstarted">Get Started</a></li>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['about']['disabled']){?>
      <li class="icon-doc"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=about&action=pool">About</a></li>
      <?php }?>
      <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['donors']['disabled']){?>
      <li class="icon-money"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=about&action=donors">Donors</a></li>
      <?php }?>
    </ul>
    <h3>Other</h3>
    <ul class="toggle">
      <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1){?>
      <?php if (!(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_contactform'])===null||$tmp==='' ? "0" : $tmp)==1){?>
      <!--li class="icon-mail"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=contactform">Support</a></li-->
      <?php }?>
      <li class="icon-off"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=logout">Logout</a></li>
      <?php }else{ ?>
      <li class="icon-login"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=login">Login</a></li>
      <li class="icon-pencil"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=register">Sign Up</a></li>
      <!-- li class="icon-mail"><a href="<?php echo $_SERVER['PHP_SELF'];?>
?page=support">Support</a></li-->
      <?php }?>
    </ul>
    <ul>
      <hr/>
    </ul>
    <?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1){?>
     <br />
    <?php }else{ ?>
    <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar']&&!$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_navbar_api']){?>
    <ul>
     <center>
      <div style="display: inline-block;">
      <i><u><b><font size="2"> </font></b></u></i>
      <div id="mr" style="width:180px; height:120px;"></div>
      <div id="hr" style="width:180px; height:120px;"></div>
      </div>
     </center>
    </ul>
      <hr/>
    <?php echo $_smarty_tpl->getSubTemplate ("global/navjs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

    <?php }?>
    <?php }?>
<?php }} ?>