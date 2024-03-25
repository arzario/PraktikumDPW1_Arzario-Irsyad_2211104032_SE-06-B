<?php
    // Fungsi untuk mengecek apakah sebuah bilangan adalah bilangan prima
    function isPrime($num) {
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
    
    // Menampilkan bilangan prima dari 1 sampai 100
    for ($i = 2; $i <= 100; $i++) {
        if (isPrime($i)) {
            echo "$i adalah bilangan prima\n";
        }
    }  
?>

