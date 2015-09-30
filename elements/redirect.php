<?php  defined('C5_EXECUTE') or die(_("Access Denied.")); ?>
<?php
if (is_object($c)) {
    if ($redirectURL = $c->getCollectionAttributeValue('redirect_url')) {
        if ($redirectURL != '') {
            Header( "HTTP/1.1 301 Moved Permanently" ); 
          Header( "Location: " . $redirectURL ); 
       }
    }
}
?>
