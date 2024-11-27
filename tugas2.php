<?php
// Fungsi untuk mengecek apakah bilangan prima
function cekPrima($num) {
    if ($num <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

// Looping untuk bilangan dari 1 sampai 20
for ($num = 1; $num <= 20; $num++) {
    // Mengecek apakah bilangan ganjil atau genap
    if ($num % 2 == 0) {
        $status = "genap";
    } else {
        $status = "ganjil";
    }
    
    // Mengecek apakah bilangan juga prima
    if (cekPrima($num)) {
        $status .= " sekaligus bilangan prima";
    }
    
    // Output hasilnya
    echo "Angka $num adalah bilangan $status.<br>";
}
?>