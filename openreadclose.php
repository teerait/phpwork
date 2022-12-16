<?php

    $file1 = fopen('teera.txt','r') or die("ไม่พบไฟล์ที่ต้องการ");
    echo fread($file1,filesize('teera.txt'));
    fclose($file1);

?>