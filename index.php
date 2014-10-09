<?php
include 'template/library.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <?php head(); ?>
    </head>
    <body>
        <?php head_title(); ?>
        <?php menu(); ?>
        <?php
            echo $option=GET('option');
            switch($option){
                case 'contact':
                    content_contact();
                    break;
                default:
                    content_default();
            }
        ?>
        <?php footer(); ?>
    </body>
</html>