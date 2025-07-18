<?php

// implementasi abstracct function
abstract class calculator {
    public int $angka1;
    public int $angka2;
    public int $angka3;
    public int $angka4;

    public abstract function calculate();
}

class addition extends calculator{
    
    public function calculate(){
        $total = $this->angka1 + $this->angka2 + $this->angka3 + $this->angka4;
        echo "anda memilih menu penjumlahan";
        echo "Hasil = " . $total . PHP_EOL;
    }
}

class substraction extends calculator{
    
    public function calculate(){
        $total = $this->angka1 - $this->angka2 - $this->angka3 - $this->angka4;
        echo "anda memilih menu pengurangan";
        echo "Hasil = " . $total . PHP_EOL;
    }
}

class division extends calculator{
    
    public function calculate(){
        $total = $this->angka1 / $this->angka2 / $this->angka3 / $this->angka4;
        echo "anda memilih menu pembagian";
        echo "Hasil = " . $total . PHP_EOL;
    }
}

class multiplication extends calculator{
    
    public function calculate(){
        $total = $this->angka1 * $this->angka2 * $this->angka3 * $this->angka4;
        echo "anda memilih menu perkalian";
        echo "Hasil = " . $total . PHP_EOL;
    }
}
    