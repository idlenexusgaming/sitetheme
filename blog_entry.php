<?php
defined('C5_EXECUTE') or die(_("Access Denied."));
$this->inc('elements/header.php');
$nav = Loader::helper('navigation');
?>

<div id="content">
  <div id="colOne">

    <?php $this->inc('elements/sidebar.php'); ?>

  </div>
  <div id="colTwo">
  <div id="blogEntry">
		
	<?php $a = new Area('Blog Post Header'); $a->display($c); ?>

	<h1><?php echo $c->getCollectionName(); ?></h1>

	<p>
	<?php  $a = new Area('Main'); $a->display($c); ?>
	<?php $a = new Area('Blog Post More'); $a->display($c); ?>
	</p>

	<p>
	<?php  
	$userName = 'Anonymous';
	$cuid = $c->getCollectionUserID();
	if ($cuid) {
		$ui = UserInfo::getByID($cuid);
		$userName = $ui->getUserName();
		$u = new User();
		if ($u->isRegistered()) { 
			if (Config::get("ENABLE_USER_PROFILES")) {
				$userName = '<a href="' . $this->url('/profile') . '">' . $ui->getUserName() . '</a>';
			}
		}
	}
	?>
	</p>

	<p><?php  echo t('Posted by:');?> <span><?php   echo $userName; ?> at <a href="<?php  $c->getLinkToCollection;?>"><?php  echo $c->getCollectionDatePublic('g:i a')?> on <?php echo $c->getCollectionDatePublic('F jS, Y')?></a></span>
	</p>

	<?php $a = new Area('Blog Post Footer'); $a->display($c); ?>

    </div><!-- end blogEntry -->
  </div><!-- end colTwo -->
</div><!-- end content -->

<?php  $this->inc('elements/footer.php'); ?>
