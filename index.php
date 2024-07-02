<?php
include_once __DIR__ . '/classes/Movie.php';
$matrix = new Movie("matrix", "18-4-1999", "200kk", "1kkk", "action");

$lotrl = new Movie("The lord of the rings", "18-4-2322", "400kk", "2kkk", "fantasy");

var_dump($matrix, $lotrl);
