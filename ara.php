

<?php

echo php_uname();
echo PHP_OS;

$eg = imagegrabscreen();
imagepng($eg, "ekrangoruntusu.png");
echo "<img src=\"ekrangoruntusu.png\">";
imagedestroy($eg);
?>
