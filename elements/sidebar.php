<?php defined('C5_EXECUTE') or die("Access Denied."); ?>
<div id="top-sidebar">
  <?php $as = new GlobalArea('Top Sidebar'); $as->display(); ?>
</div>
<div id="middle-sidebar">
  <?php $as = new GlobalArea('Middle Sidebar'); $as->display($c); ?>
</div>
<? /*<div id="bottom-sidebar">
  <div class="sidebar-ads">
    <?php $as = new GlobalArea('Bottom Sidebar'); $as->display($c); ?>
  </div>
</div> */?>
