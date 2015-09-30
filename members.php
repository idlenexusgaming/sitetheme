<?php  defined('C5_EXECUTE') or die("Access Denied."); 
$this->inc('elements/header.php');?>
<div id="content">
  <div id="colOne">

    <?php $this->inc('elements/sidebar.php'); ?>

  </div>
  <div id="colTwo">
<div id="members">
<div id="ccm-profile-wrapper">
<br>
	<form method="get" action="<?php echo DIR_REL?>/<?php echo DISPATCHER_FILENAME?>">
			<?php  echo t('Search');?>  		
			<input type="hidden" name="cID" value="<?php echo $c->getCollectionID()?>" />
			<input name="keywords" type="text" value="<?php echo $keywords?>" size="20" />		
			<input name="submit" type="submit" value="<?php echo t('Search')?>" />	

	</form>
	
	<h1><?php  echo t('Members');?></h1> 	
	
	<?php  if ($userList->getTotal() == 0) { ?>
	
		<div><?php echo t('No users found.')?></div>
	
	<?php  } else { ?>
	
		<div class="ccm-profile-member-list">
		<?php   
		$av = Loader::helper('concrete/avatar');
		$u = new User();
		
		foreach($users as $user) { 
$ui = UserInfo::getByID($user->getUserID());
if ($ui->getAttribute('profile_display_in_public') == 1 || 
    $u->isSuperUser() || $u->inGroup(Group::getByName('Administrators'))) {
		
			?>				
			<div class="ccm-profile-member">
				<div class="ccm-profile-member-avatar"><a href="<?php echo $this->url('/profile','view', $user->getUserID())?>"><?php echo $user->getUserName()?><br><?php echo $av->outputUserAvatar($user)?></a></div>
				<div class="ccm-profile-member-detail">
					<div class="ccm-profile-member-fields">
					<table>
					<?php 
					foreach($attribs as $ak) { ?>
						<tr><td><strong><?php $attributeName = $ak->getAttributeKeyName(); echo $attributeName; ?>:</strong></td><td>
							<?php $attributeValue = $user->getAttribute($ak, 'displaySanitized', 'display');
$displayText = $attributeValue; if ($attributeName == "Web Site") { 
	$displayText="<a href=\"" . $attributeValue . "\">" . $attributeValue . "</a>"; 
}; echo $displayText; ?>
						</td></tr>
					<?php  } ?>
					</table>
					</div>					
				</div>
				<div class="ccm-spacer"></div>
			</div>	
		
		
	<?php  } ?>
	<?php  } ?>
		
		</div>
		
		<?php echo $userList->displayPagingV2()?>
		
	<?php  
	
	} ?>
</div>
</div>
</div>
</div>
<?php  $this->inc('elements/footer.php'); ?>
