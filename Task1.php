<?php

// Create a custom function that accepts one string parameter and returns it reversed. Example input: "random string" => output: "gnirts modnar".
// Don't use built-in strrev() function.

$example = 'random string';

function reverseString(string $input) : string
{
    $strCount = strlen($input);
    $reverseStr = '';

    for ($i = $strCount; $i>0; $i--)
    {
        $reverseStr .= $input[$i-1];
    }

    return $reverseStr;
}

echo reverseString($example);
