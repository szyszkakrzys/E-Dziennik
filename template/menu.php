<?php
function menu(){
    $page_address=information('page_address');
    
    echo'   
        <div id="menu_wrapper">
            <div id="menu">
                <ul>
                    <li><a href="'.$page_address.'/index.php" class="last">Home</a></li>
                    <li><a href="'.$page_address.'/index.php?option=contact" class="last">Contact</a></li>
                </ul>    	
            </div> <!-- end of menu -->
        </div>
    ';
}

