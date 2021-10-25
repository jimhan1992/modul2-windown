<?php
function check_phone($str)
{
    $str = substr($str, 0, 3);
    switch ($str) {
        case '032':
        case '033':
        case '034':
        case '035':
        case '036':
        case '037':
        case '038':
        case '039':
        case '086':
        case '096':
        case '097':
        case '098':
            return 1;
        case '081':
        case '082':
        case '083':
        case '084':
        case '085':
        case '088':
        case '091':
        case '094':
            return 2;
        case '070':
        case '076':
        case '077':
        case '078':
        case '079':
        case '089':
        case '090':
        case '093':
            return 3;
    }
}
