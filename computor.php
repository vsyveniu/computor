<?php
require ('lib/error.php');
require ('lib/parse.php');
require ('lib/validate.php');


    if($argc < 2)
    {
            no_one_arguments_error();
    }
    else
        {
            array_shift($argv);
           foreach ($argv as $value)
           {
               parse($value);
           }
        }