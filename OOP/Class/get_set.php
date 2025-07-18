<?php

class storage
{
    private string $nama;
    private string $id;
    private int $stok;
    private bool $ketersediaan;

    public function getName(): string
    {
        return $this->nama;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getStok(): int
    {
        return $this->stok;
    }

    public function isSedia(): bool
    {
        return $this->ketersediaan;
    }

    public function setName(string $nama)
    {
        $this->nama = $nama; 
    }

    public function setId(string $id)
    {
        $this->id = $id; 
    }

    public function setStok(int $stok)
    {
        $this->stok = $stok; 
    }

    public function setSedia(bool $ketersediaan)
    {
        //if 
        $this->ketersediaan = $ketersediaan; 
    }

    public function status(bool $ketersediaan)
    {
        if ($ketersediaan == true){
            return "Stok masih tersedia";;
        } else if ($ketersediaan == false) {
            return "Stok sudah habis" . PHP_EOL;
        }
        
    }

}