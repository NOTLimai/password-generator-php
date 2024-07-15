<?php

function generatePassword(): string
{
    $length = rand(8, 16);
    $charsMin = 'abcdefghijklmnopqrstuvwxyz';
    $charsMaj = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charsNum = '0123456789';
    $charsSpec = '!@#$%^&*()-_=+[]{}|;:,.<>?';

    $allChars = $charsMin . $charsMaj . $charsNum . $charsSpec;

    $password = '';
    $password .= $charsMin[rand(0, strlen($charsMin) - 1)];
    $password .= $charsMaj[rand(0, strlen($charsMaj) - 1)];
    $password .= $charsNum[rand(0, strlen($charsNum) - 1)];
    $password .= $charsSpec[rand(0, strlen($charsSpec) - 1)];

    for ($i = 4; $i < $length; $i++) {
        $password .= $allChars[rand(0, strlen($allChars) - 1)];
    }

    return str_shuffle($password);
}

echo generatePassword();