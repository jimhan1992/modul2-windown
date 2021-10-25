<?php

include('TennisGame.php');

$tennisGame = new TennisGame();

$tennisGame->getScore('player1', 'player2', 50, 51);

echo $tennisGame;