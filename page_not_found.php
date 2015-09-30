<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
$this->inc('elements/header.php'); ?>
<div id="content">
  <div id="colOne">

    <?php $this->inc('elements/sidebar.php'); ?>

  </div>
  <div id="colTwo">

<h1 class="error"><?php echo t('Page Not Found')?></h1>

<?php echo t('No page could be found at this address.')?>

<?php  if (is_object($c)) { ?>
	<br/><br/>
	<?php  $a = new Area("Main"); $a->display($c); ?>
<?php  } ?>

<br/><br/>

<a href="<?php echo DIR_REL?>/"><?php echo t('Back to Home')?></a>.
</div>
</div>

<?php  $this->inc('elements/footer.php'); ?>
