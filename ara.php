
<?php 

$dosya_adi = "/bilgi.txt"; 

$dosya = fopen ($dosya_adi , `w`) or die ("Dosya açılamadı!"); 

$metin = "Bu satır dosyaya yazılacak: Merhaba Dünya!n"; 

fwrite ( $dosya , $metin ) ; 

fputs ( $dosya , "Bu satır ise sonradan eklenecekn" ) ; 

fclose ($dosya); 

?>
