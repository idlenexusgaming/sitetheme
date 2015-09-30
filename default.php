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

    <div id="main">
	<?php $a = new Area('Main'); $a->display($c); ?>
    </div>

    <div id="middle">
      <div id="middle-left">
        <?php $a = new Area('Middle'); $a->display($c); ?>
      </div>
      <div id="middle-right">
        <?php $a = new Area('Middle Right'); $a->display($c); ?>
      </div>
    </div>

    <div id="feeds">
	<?php $a = new Area('Feeds'); $a->display($c); ?>
      <div id="feed-left">
	<?php $a = new Area('Feed Left'); $a->display($c); ?>
      </div>
      <div id="feed-right">
	<?php $a = new Area('Feed Right'); $a->display($c); ?>
      </div>
    </div>

  </div><!-- end colTwo -->
  <div id="bottombar">
    <div id="sharebar">

<?
                $a = new GlobalArea('Share Bar');
                $a->display($c);
?>

    </div><!-- end sharebar -->
  </div><!-- end bottombar -->
</div><!-- end content -->

<?php  $this->inc('elements/footer.php'); ?>
