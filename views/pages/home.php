<H1>My Escape </H1>
<p>Explore. Travel. Share</p>
<?php 
    #session_start();//removed as now in layout
    if (!empty($_SESSION['username'])){
        echo '<p>Hi '.$_SESSION['username'].' , you are still logged in - want to visit your '
                . "<a href='?controller=blog&action=create'>profile page </a>?</p>";
    }
?>
