<?php

class Movie
{
    public $title;
    public $airedFirstTime;
    public $budget;
    public $profit;
    public $genre;

    public function __construct($title, $airedFirstTime, $budget, $profit, $genre)
    {
        $this->title = $title;
        $this->airedFirstTime = $airedFirstTime;
        $this->budget = $budget;
        $this->profit = $profit;
    }
}
