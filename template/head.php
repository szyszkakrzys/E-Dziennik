<?php
function head(){
   echo'
                <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
                <title>Student diary</title>
                <meta name="keywords" content="dzienniczek ucznia, dzienniczek, uczeń, szkoła" />
                <meta name="description" content="Dzienniczek jest stworzony do internetowej obsługi ucznia" />
                <link href="style.css" rel="stylesheet" type="text/css" />
    ';
}
function head_title(){
    echo'
        <div id="site_title_bar_wrapper">
            <div id="site_title_bar">
                <div id="site_title">
                    <h1><a href="index.php">
                        <img src="images/logo.png" alt="myWORK" />
                        <span>Student Diary</span>
                        </a>
                    </h1>
                </div>
            </div> <!-- end of site_title_bar -->
        </div> <!-- end of site_title_bar_wrapper -->
      ';
}

