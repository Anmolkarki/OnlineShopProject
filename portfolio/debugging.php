<?php
    $day = 'Saturday' ;
    $count = 300 ;
    echo'<br/>';
    echo 'I just wanted to say that\'s fine';
    echo '<br />';
    echo 'The day is '.$day ;
    echo '<br />';
    print 'The count is '.$count;
    echo '<br />';

    if ($count == 300)
    {
        echo 'correct';
    }
    else
    {
        echo 'incorrect';
    }
    echo '<br />';
    $time = 14;
    if($time < 12 )
    {
        echo 'Good morning';
    }
    elseif( $time >= 12 && $time <= 18 )
    {
        echo 'Good afternoon';
    }
    else
    {
        echo 'Good Evening';            
    }
?>
