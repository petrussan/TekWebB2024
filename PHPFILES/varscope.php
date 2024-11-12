<?php
    $x = 5;
    $y = 10;    

    function testScope() {
        //global $x,$y;
        //$x = $x+$y;
        // echo "<p> variable x inside function : $x</p>";
        
        // $GLOBALS['x'] = $GLOBALS['x']+$GLOBALS['y'];
        // echo "<p> variable x inside function :" 
        //     .$GLOBALS['x']. "</p>";
        
        static $z=0;
        echo $z."<br>";
        $z++;
    }

    //loop: while, do while, for, foreach

    // $i = 0;
    // while ($i<60) {
    //     testScope();
    //     $i++;
    // }

    for ($i=0;$i<60;$i++) {
        testScope();
    }

    $menu = array("Nasi Goreng","Mie Goreng", "KweeTiau Siram");

    foreach($menu as $s) {
        echo "$s<br>";
    }
        
    //decision: if, if else,..., switch, ?

    $a = 70;
    $b = $a < 56 ? "Tidak Lulus" : "Lulus";
    echo $b; 


    // testScope();
    // testScope();
    // testScope();
    // testScope();
    // testScope();

    // echo "<p> variable x outside function : $x</p>";
    
?>