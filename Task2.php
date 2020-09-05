<?php

// Create a custom function to calculate and return the factorial of a number. Example input: 5 => output: 120.
// Using recursion gives extra points. https://en.wikipedia.org/wiki/Factorial.

$example = 5;

function factorial(int $num)
{
    if($num === 0)
    {
        return 1;
    }
    else
    {
        // n! = n ∗ (n−1)!
        return $num * factorial($num - 1);
    }
}

echo factorial($example);
