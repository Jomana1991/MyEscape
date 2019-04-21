<?php
#session_start();//removed as now in layout
session_destroy();

header ('location:?controller=pages&action=home');
//echo 'log out successful';

?>
