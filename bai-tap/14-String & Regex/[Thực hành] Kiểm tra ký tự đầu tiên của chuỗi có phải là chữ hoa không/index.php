<?php

function isFirstLetterUpperCase($str)
{
    $regexp = '/^[A-Z]/';
    if (preg_match($regexp, $str)) {
        echo("String's first character is uppercase<br>");
    } else {
        echo("String's first character is not uppercase<br>");
    }
}
isFirstLetterUpperCase('Codegym');
isFirstLetterUpperCase('cdegym');
isFirstLetterUpperCase('Nguyen van Nam');
isFirstLetterUpperCase('NGUYEN VAN NAM');
isFirstLetterUpperCase(' nguyen van Nam');