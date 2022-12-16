<?php

    $today = date('D');

    switch ($today) {
        case 'Fre':
            echo "วันนี้ วันศุกร์";
            echo "<style>
                    body{
                        background-color: skyblue;
                    }
                    </style>";
            break;
        case 'Sat':
            echo "วันนี้ วันเสาร์";
            echo "<style>
                    body{
                        background-color: purple;
                    }
                    </style>";
            break;
        case 'Sun':
            echo "วันนี้ วันอาทิตย์";
            break;
        case 'Mon':
            echo "วันนี้ วันจันทร์";
            break;
        case 'Tue':
            echo "วันนี้ วันอังคาร";
            break;
        case 'Wed':
            echo "วันนี้ วันพุธ";
            break;

        default:
        echo "วันนี้ วันพฤหัสบดี";
            break;
    }

    echo "<hr color='red'>";

    $month = date('M');
    //เดือนนี้ได้ Nov

    switch ($month) {
        case 'Nov':
            # code...
            break;
        
        default:
            # code...
            break;
    }

    echo "<hr color='green'>";





?>