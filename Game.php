<?php

include 'auto_loader.php';

$deck = new Poker\Deck();
$deck->shuffle();

print_r($deck->getCards());
?>
