<?php 


// 15 lampu bernomor 1 - 15
// 3 saklar bernomor 1 -3
// X ditambah X
// 1 = 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15
// 2 = 2, 4, 6, 8, 10, 12, 14
// 3 = 3, 6, 9, 12, 15



function tekateki($number) {
    $lamp = [
        1 => 0,
        2 => 0,
        3 => 0,
        4 => 0,
        5 => 0,
        6 => 0,
        7 => 0,
        8 => 0,
        9 => 0,
        10 => 0,
        11 => 0,
        12 => 0,
        13 => 0,
        14 => 0,
        15 => 0,

    ];
    $lampOn = 0;
    $lampOff = 0;
    $number = str_split($number);

    foreach ($number as $num) {
        
        switch ($num) {
            case 1:
                for ($i=1; $i<=15; $i++) {
                    if ($lamp[$i] == 0) {
                        $lamp[$i] = 1;
                    } else {
                        $lamp[$i] = 0;
                    }
                }
                break;
            case 2:
                for ($a=2; $a<=15; $a++) {
                    if ($a %2==0) {
                        if ($lamp[$a] == 0) {
                            $lamp[$a] = 1;
                        } else {
                            $lamp[$a] = 0;
                        }
                    }
                }
                break;
            case 3:
                for ($c=3; $c<=15; $c++) {
                    if ($c %3==0) {
                        if ($lamp[$c] == 0) {
                            $lamp[$c] = 1;
                        } else {
                            $lamp[$c] = 0;
                        }
                    }
                }
                break;
        }

     
    }

    foreach ($lamp as $lamp) {
        if ($lamp == 1) {
            $lampOn += 1;
        } else {
            $lampOff +=1;
        }
    }

    // Viewer
    echo "Jumlah Lampu Menyala = ";
    echo $lampOn;
    echo "<br>";
    echo "Jumlah Lampu Mati = ";
    echo $lampOff;


}


tekateki(1321);

?>