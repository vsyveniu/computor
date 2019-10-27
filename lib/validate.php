<?php



function validate_chars($str)
{
    $pattern = '/[^\d\*\+-=X\^\s]/';
    $matches = [];
    $result = [];
    if(preg_match_all($pattern, $str,$matches) == 0)
    {
        $result['error'] = 0;
        $result['str'] = $str;
    }
    else
    {
        $result['error'] = 1;
        $result['str'] = highlight_chars_error($str, $matches);
    }
    return $result;
}

function validate_lexicon($str)
{
    echo $str."\n";
    $pattern = '/\d\s?[*|+|-]/';
    $matches = [];
    preg_match_all($pattern, $str,$matches);
    print_r($matches);
}

function validate($str)
{
    $result = validate_chars($str);
    $result = validate_lexicon($result['str']);
    print_r($result);


}