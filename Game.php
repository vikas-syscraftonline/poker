<?php

include 'lib/Card.php';
include 'lib/Suit.php';
include 'lib/Deck.php';

$deck = new Poker\Deck();
$deck->shuffle();

print_r($deck->getCards());
?>
