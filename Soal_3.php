<?php 


function operasi($n) {
    $result = null;
    for ($i=$n; $i>0; $i--) {
        $point = 0;
        $a = $i;
        while ($a != 1) {
            
            if ($a %2==0) {
                $a = $a/2;
            } else {
                $a = $a*3+1;
            }
            $point++;
            $temp = $point;
        }
        
        if ($result < $temp) {
            $result = $temp;
            $highest = $i;
        }
        
    }
    
    // Viewer
    echo "operasi(" . $n . ") <br>";
    echo "Bilanga Asli dengan operasi terbanyak = " . $highest;
    

}

operasi(100);

?>

