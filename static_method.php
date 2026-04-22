<?php
// ============================================
// LATIHAN 2 - Static Method
// File: static_method.php
// Konsep: Method bisa dipanggil TANPA membuat objek
// Keyword self:: untuk akses dalam class yang sama
// ============================================

class Matematika {

    public static function tambah($a, $b) {
        return $a + $b;
    }
}

// Dipanggil langsung via class, TANPA new Matematika()
echo Matematika::tambah(5, 3); // Output: 8

/*
PENJELASAN:
- Static method bisa dipanggil tanpa membuat objek (new)
- Langsung pakai: NamaClass::namaMethod()
- Di dalam static method, gunakan self:: untuk akses property/method static lain
- TIDAK BISA menggunakan $this di dalam static method
*/
?>
