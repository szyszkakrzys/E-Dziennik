<?php
function information($date){
    if($date=='page_address')
        return $information='http://localhost/STUDIA';
}
function GET($value){
    if($value=='option')
        if(isset($_GET['option']))
            return $_GET['option'];
        else
            return $value='default';
     
}

include information('portal_address').'/template/head.php';
include information('portal_address').'/template/menu.php';
include information('portal_address').'/template/footer.php';
include information('portal_address').'/template/content/default.php';
include information('portal_address').'/template/content/contact.php';
?>

