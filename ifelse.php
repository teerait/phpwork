<?php
    
    // 1-9 
    //0 2 4 6 8
    //1 3 5 7 9
    $score = 18;
    if($score % 2 == 0){
       echo "เลขคู่"; 
    }
    echo "<hr color='red'>";
    if($score % 2 == 0){
        echo "เลขคู่";
    }else{
        echo "เลขคี่";
    }
    echo "<hr color='red'>";

    $led = "green";

    if($led == 'red'){
        echo "STOP!!!";
    }elseif($led == 'yellow'){
        echo "SLOWLY!!!";
    }else{
        echo "GOING!!!";
    }

?>