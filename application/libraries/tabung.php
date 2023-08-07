<?php

class tabung

{
  
    function volume($t , $r)
    {
        $v = 3.14 * $r * $r * $t;
        echo "Phi : 3.14 <br> Jari-Jari : ".$r ."<br>Tinggi : ". $t;
        echo " <br>Hasil Volumenya setelah dicari " . $v;
        echo "<br><hr>";

    }
    function luaspermukaan($t, $r)
    {
        $L = 2 * 3.14 * $r * ($r+$t);
        echo "Phi : 3.14 <br> Jari-Jari : ".$r ."<br>Tinggi : ". $t;
        echo " <br>Hasil Luar Permukaannya setelah dicari " .$L;
        echo "<br><hr>";
        

    }

    function luasselimut($t, $r)
    {
        $Ls = 2 * 3.14 * $r *$t ;
        echo "Phi : 3.14 <br> Jari-Jari : ".$r ."<br>Tinggi : ". $t;
        echo "<br>Hasil Luas Selimut setelah dicari ". $Ls;
        echo "<br><hr>";
    }
}