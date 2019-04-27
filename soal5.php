<?php

function RandomString($length)
{
    $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randstr = '';
    $charslength = strlen($chars);
    for ($i = 1; $i <= $length; $i++) {
         $randstr = $randstr . $chars[rand(0, $charslength - 1)];
    }
    return $randstr;
}

function loopRand($total) {
    for($i = 0; $i < $total; $i++ ){
        echo RandomString(32)."<br>";
    }
}

loopRand(5);