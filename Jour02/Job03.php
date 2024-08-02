<?php
for($i = 0; $i <100; $i+=1){
if ($i == 42) {
    echo "La Plateforme_<br />";}

elseif ($i >= 0 && $i <= 20) {
    echo '<b><i>' . $i . '</i></b><br />';
}
elseif ($i >= 25 && $i <= 50) {
    echo '<b><u>' . $i . '</u></b><br />';
}
else {
    echo $i . '<br />';
}
}
?>