<?php

class Kendaraan {

    final public function mesin() {
        echo "Mesin standar";
    }
/* Ok disini aku pakai merk ya soalnya kalau disini gak bisa ditumpuk kalau di tumpuk misalnya mesin 
di Bawahnya mesin juga eror jadinya */

}

class Mobil extends Kendaraan {

   
    public function merk() {
        echo "Toyota";
    }
}

$mobil = new Mobil();
$mobil->mesin(); 
echo "<br>";
$mobil->merk();  

?>
