<?php include 'form.html'; ?>


<?php
extract($_REQUEST);
$file=fopen("form-save.txt","a+");
fwrite($file,"name :");
fwrite($file,$username ."\n");
fwrite($file,"Email :");
fwrite($file,$email ."\n");
fwrite($file,"Старт: ");
fwrite($file,$startrang ."\n");
fwrite($file,"Финиш: ");
fwrite($file,$finishrang ."\n");
fwrite($file,"Account: ");
fwrite($file,$acclink ."\n");
fclose($file);
?>
