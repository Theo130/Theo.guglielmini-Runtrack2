<?php
for ($i = 0; $i <= 1337; $i++) {
    if ($i == 42) {
        echo '<b><u>' . $i . '</u></b><br />';
    } 
    elseif ($i == 26 || $i == 37 || $i == 88 || $i == 1111 || $i == 3233) {
        continue;
    }
    else {
        echo $i . '<br />';
    }
    
}
?>