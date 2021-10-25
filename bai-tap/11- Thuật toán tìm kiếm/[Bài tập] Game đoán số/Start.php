<?php

function start()
{
    $_SESSION["mid"] = 50;
    $_SESSION["left"] = 0;
    $_SESSION["right"] = 100;
    return $_SESSION["mid"];
}

function right()
{
    $mid = $_SESSION['mid'];
    $high = $_SESSION['right'];
    $_SESSION['left'] = $mid + 1;
    $low = $_SESSION['left'];
    $_SESSION['mid'] = (int)(($low + $high) / 2);
    return $_SESSION['mid'];
}

function left()
{
    $mid = $_SESSION['mid'];
    $_SESSION['right'] = $mid - 1;
    $low = $_SESSION['left'];
    $high = $_SESSION['right'];
    $_SESSION['mid'] = (int)(($low + $high) / 2);
    return $_SESSION['mid'];
}