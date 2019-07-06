<?php 

// jika tgl ganjil beli 3 + 1
// jika tgl genap beli 4 + 1
// tgl kelipatan 5 (5, 10, 15, 20, 25,30) jika bonus genap kali 10
// tgl kelipatan 5 (5, 10, 15, 20, 25,30) jika bonus ganjil kali 5



function buyNoodle($date, $money) {
    $mie = 1500;
    $getMie = intval($money/$mie);

    if ($date %2==0) {
        $bonus = intval($getMie/4);
    } else {
        $bonus = intval($getMie/3);
    }

    if ($date %5==0) {
        if ($bonus %2==0) {
            $result = $bonus * 10 + $getMie;
        } else {
            $result = $bonus *5 + $getMie;
        }
    }

    // Viewer
    echo "buyNoodle(" . $date. ", " .$money. ") <br>";
    echo $result;

}

buyNoodle(25,50000);

?>