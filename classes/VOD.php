<?php
class VOD {
    private $films = ["Film1", "Film2", "Film3", "Film4", "Film5"];
    private $tarif = 5;
    private static int $nbAbo = 0;

    // Contruct :
    public function __construct(){

    }

    // Add 1 Abo:
    public static function addAbo(){
        self::$nbAbo++;
    }

    // Return nb Abo:
    public static function nbAbo(){
         return self::$nbAbo;
    }

    // Film : get & set
    public function getFilms(): array
    {
        return $this->films;
    }

    public function setFilms(array $films): void
    {
        $this->films = $films;
    }

    // Tarif : get & set
    public function getTarif(): int
    {
        return $this->tarif;
    }

    public function setTarif(int $tarif): void
    {
        $this->tarif = $tarif;
    }

}