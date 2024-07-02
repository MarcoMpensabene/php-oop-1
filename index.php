<?php
include_once __DIR__ . '/classes/Movie.php';

$matrixFirst = new Movie("The Matrix", "March 24, 1999", 63000000, 467600000, ["cyberpunk", "action", "science fiction"], 136,);

$lotrFirst = new Movie("Fellowship of the ring", "10 December 2001", 93000000, 898200000, "fantasy", 178,);

$matrixFirstProfit = $matrixFirst->totalProfit($matrixFirst->moneyGained, $matrixFirst->budget);
$lotrFirstProfit =  $lotrFirst->totalProfit($lotrFirst->moneyGained, $lotrFirst->budget);
// var_dump($matrixFirst, $lotrFirst);
?>

<header>
    <h1>Films infos</h1>
</header>

<section>
    <ul>
        <li>
            <h1> <?php echo $matrixFirst->title ?></h1>
        </li>
        <li>
            Aired in <?php echo $matrixFirst->airedFirstTime ?>
        </li>
        <li>
            Initial budget <?php echo $matrixFirst->budget ?> $
        </li>
        <li>
            Money gained from box office <?php echo $matrixFirst->moneyGained ?> $
        </li>
        <li>
            Genre : <?php echo implode(" | ", $matrixFirst->genre) ?> <!-- utilizzo implode per convertire l'array -->
        </li>
        <li>
            Film duration <?php echo $matrixFirst->duration ?> minutes
        </li>
    </ul>
</section>

<section>
    <ul>
        <li>
            <h1> <?php echo $lotrFirst->title ?></h1>
        </li>
        <li>
            Aired in <?php echo $lotrFirst->airedFirstTime ?>
        </li>
        <li>
            Initial budget <?php echo $lotrFirst->budget ?> $
        </li>
        <li>
            Money gained from box office <?php echo $lotrFirst->moneyGained ?> $
        </li>
        <li>
            Genre : <?php echo implode(",", $lotrFirst->genre)  ?> <!-- utilizzo implode per convertire l'array -->
        </li>
        <li>
            Film duration <?php echo $lotrFirst->duration ?> minutes
        </li>
    </ul>
</section>



<div>
    <p>Profit of The Matrix considering only budget and box office receipts : <?php echo $matrixFirstProfit; ?> $</p>
    <p>Profit of The Lord of The Rings considering only budget and box office receipts : <?php echo $lotrFirstProfit; ?> $</p>
</div>