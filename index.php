<?php

function can_enter($age): string
{
    if ($age >= 18) {
        return 'You can enter';
    } else if ($age == 16 || $age == 17) {
        return 'You must be accompanied by an adult';
    } else {
        return 'You cannot enter';
    }
}

$age = 16;
echo can_enter($age);