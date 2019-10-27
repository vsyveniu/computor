<?php

function no_one_arguments_error()
{
    echo "You must specify at least one argument\n";
    exit(0);
}

function highlight_chars_error($str, $matches)
{
    foreach($matches[0] as $key => $value)
    {
        $new = "\e[0;31;31m".$value."\e[0m";
        $str = str_replace($value, $new, $str);
    }
    return $str;
}