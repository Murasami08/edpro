<?php
$dayOfWeek = (int)date('w'); 
$shouldHideBlock = in_array($dayOfWeek, [2, 4, 6]); 
?>