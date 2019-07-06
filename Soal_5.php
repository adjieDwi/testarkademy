<?php 


function nilaiNama($names) {
    $name = strtolower($names);
    $alfa = " abcdefghijklmnopqrstuvwxyz";
    $split_name = explode(" ",$name);
    $count = count($split_name);
    $x = 1;

    for($i=0; $i<=$count-1; $i++) {
        $split = str_split($split_name[$i]);
        $c = count($split);
        $r = 0;
        for ($n=0; $n<=$c-1; $n++) {
            if ($r==0) {
                $r = strpos($alfa, $split[$n]);
            }else {
                $r = strpos($alfa, $split[$n]) + $r;
            }
            
        }
        
        $result = $r * $x++;
        $view[$x] = $result;
       
    }
    
// Viewer
echo "nilaiNama(" . $names . ")<br>";
foreach ($view as $k) {
    echo $k;
    echo "<br>";
}
    
}

nilaiNama("Christoper Slovanoski");

?>