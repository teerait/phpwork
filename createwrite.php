<?php

    $file = fopen("pattani.txt","w");
    fwrite($file, "Teera Binkasem\n");
    $file2 = fopen("pattani.txt","r");
    echo fread($file2, filesize("pattani.txt"));
    fclose($file2);
    
    echo "<br>";

    $file = fopen("pattani.txt","w");
    fwrite($file, "Infomation Technology\n");
    $file4 = fopen("pattani.txt","r");
    echo fread($file4, filesize("pattani.txt"));
    fclose($file4);

?>