<?php  defined('C5_EXECUTE') or die("Access Denied.");
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

<h1><?php echo t('Coming Back Soon')?></h1>

<?php echo t('This site is currently down for maintenance.')?>
</div>
</div>

<?php  $this->inc('elements/footer.php'); ?>
