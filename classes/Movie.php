<?php

class Movie
{
    // ? Dichiarazione di visibilità . Variabili di istanza
    public $title;
    public $airedFirstTime;
    public $budget;
    public $moneyGained;
    public $genre;
    public $duration;
    public $profit = 0;
    // ! funzione di costruzione , inserisci i valori delle VarIst quando istanzio la variabile nel mio index.php
    public function __construct($title, $airedFirstTime, $budget, $moneyGained, $genre, $duration)
    {
        $this->title = $title;
        $this->airedFirstTime = $airedFirstTime;
        $this->budget = $budget;
        $this->moneyGained = $moneyGained;
        $this->genre = is_array($genre) ? $genre : [$genre]; // ! ternario che controlla se la variabile è un array e lo trasforma di conseguenza
        $this->duration = $duration;
    }

    public function totalProfit($moneyGained, $budget)
    {
        return $this->profit = $moneyGained - $budget;
    }
}
