<?php
class rumus{

    function rums($phi, $r, $t){

        echo "Phi :". $phi ;
        echo "<br/>";
        echo "Jari-jari : ". $r;
        echo "<br/>";
        echo "Tinggi : ". $t;
        echo "<br/>";
        echo "<br/>";
        
        $v= $phi*($r*$r)*$t;
        echo "Volume Tabung adalah ". $v;
        echo "<br/>";

        $l= 2*$phi*$r*($r+$t);
        echo "Luas Permukaan Tabung adalah : ". $l;
        echo "<br/>";
        $ls = 2*$phi*$r*$t;
        echo "Luas Selimut Tabung adalah : ". $ls;
        echo "<br/>";

    }
}