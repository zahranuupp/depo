

<?php
$eg = imagegrabscreen();
imagepng($eg, "ekrangoruntusu.png");
echo "<img src=\"ekrangoruntusu.png\">";
imagedestroy($eg);
?>
