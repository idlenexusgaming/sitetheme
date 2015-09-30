<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/2000/REC-xhtml1-20000126/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
<?php $this->inc('elements/redirect.php'); ?>
<script src="elements/google.js"></script>
<script src="elements/youtube.js"></script>

<!-- Site Header Content //-->
<meta name="msvalidate.01" content="AE2AB9558B1D169DA8FBC40B689B646D" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('typography.css')?>" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php echo $this->getStyleSheet('default.css')?>" />

<?php  Loader::element('header_required'); ?>

</head>

<body>
<?php 

/* Share Buttons */
$this->inc('elements/facebook.php'); 
$this->inc('elements/google.php'); 

if ($c->isEditMode()) 
{ 
	print '<br /><br /><br />'; 
} 
?>
<div id="container">

<div id="header">
<div id="header-left">
<?
                $a = new GlobalArea('Header Left');
                $a->display($c);
?>
</div>
<div id="header-right">
  <!--//<span class="login">
    <?php 
      $u = new User(); 
      if ($u->isRegistered()) 
      {
        if (Config::get("ENABLE_USER_PROFILES")) 
        {
          $userName = '<a href="' . $this->url('/profile') . '">' . $u->getUserName() . '</a>';
        } else {
          $userName = $u->getUserName();
        }
        echo t('Welcome <b>%s</b>!', $userName);?>
      <a href="<?php echo $this->url('/login', 'logout')?>"><?php echo t('Sign Off')?></a><?php
      } else { 
    ?>
      <a href="<?php echo $this->url('/login')?>"><?php echo t('Sign On')?></a>
<?
     } ?>
  </span>
  <br>//-->
<?
                $a = new GlobalArea('Header Right');
                $a->display();
?>
</div>
</div><!-- end header -->

<? /*<div id="banner">
<div id="leaderboard">
<?
                $a = new GlobalArea('Banner');
                $a->display();
?>
</div><!-- end leaderboard -->
</div><!-- end banner -->
*/ ?>

<div id="navigation">
<div id="menu">
	<ul>
<?
                $a = new GlobalArea('Menu');
                $a->display();
?>
	</ul>
</div>
<div id="menu-middle">
<?
                $a = new GlobalArea('Menu Middle');
                $a->display();
?>
</div>
<div id="menu-right">
<?
                $a = new GlobalArea('Menu Right');
                $a->display();
?>
&nbsp;
</div>
</div><!-- end navigation -->
