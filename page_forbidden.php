<?php  defined('C5_EXECUTE') or die("Access Denied.");
<?php header($_SERVER["SERVER_PROTOCOL"]." 403 Forbidden");
$this->inc('elements/header.php'); ?>
<div id="content">
  <div id="colOne">
		<?php
			$as = new GlobalArea('Top Sidebar');
			$as->display();
			$as = new Area('Sidebar');
			$as->display($c);
		?>
  </div>
  <div id="colTwo">

<h1 class="error"><?php echo t('Page Forbidden')?></h1>

<?php echo t('You are not authorized to access this page.')?>
<br/>
<br/>

<?php  $a = new Area("Main"); $a->display($c); ?>

<a href="<?php echo DIR_REL?>/"><?php echo t('Back to Home')?></a>.
</div>
</div>

<?php  $this->inc('elements/footer.php'); ?>
