<?php  defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php'); 
$nav = Loader::helper('navigation');
?>
<div id="content">
  <div id="colOne">

    <?php $this->inc('elements/sidebar.php'); ?>

  </div>
  <div id="colTwo">
<div id="profile">
<?php 
$ui = UserInfo::getByID($profile->getUserID());
global $u;
if ($ui->getAttribute('profile_display_in_public') == 1 || 
    $u->isSuperUser() || $u->inGroup(Group::getByName('Administrators'))) {
?>
<br>
<? Loader::element('profile/sidebar', array('profile'=> $profile)); ?>
<div id="ccm-profile-wrapper">
    <div id="ccm-profile-body">	
    	<div id="ccm-profile-body-attributes">
    	<div class="ccm-profile-body-item">
    	
        <?php /*!-- h1><?php echo $profile->getUserName()?></h1 -- */?>
        <?php 
        $uaks = UserAttributeKey::getPublicProfileList();
        foreach($uaks as $ua) { ?>
            <div>
                <label><?php echo $ua->getKeyName()?></label>
                <?php $attributeValue = $profile->getAttribute($ua, 'displaySanitized', 'display');  
$displayText = $attributeValue; if ($ua->getKeyName() == "Web Site") { 
	$displayText="<a href=\"" . $attributeValue . "\">" . $attributeValue . "</a>"; 
}; echo $displayText; ?>
            </div>
        <?php } ?>		
        
        </div>

		</div>
		
		<?php  
			$a = new Area('Main'); 
			$a->setAttribute('profile', $profile); 
			$a->setBlockWrapperStart('<div class="ccm-profile-body-item">');
			$a->setBlockWrapperEnd('</div>');
			$a->display($c); 
		?>
		
    </div>
	
	<div class="ccm-spacer"></div>
	
</div>
<?php } else { ?>

<h1 class="error"><?php echo t('Page Forbidden')?></h1>

<?php echo t('You are not authorized to access this page.')?>
<br/>
<br/>

<?php  $a = new Area("Main"); $a->display($c); ?>

<a href="<?php echo DIR_REL?>/"><?php echo t('Back to Home')?></a>.
<?php } ?>

</div>
</div>
</div>

<?php  $this->inc('elements/footer.php'); ?>
