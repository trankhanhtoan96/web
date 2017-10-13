<?php
function isEmail($string)
{
    if (filter_var($string, FILTER_VALIDATE_EMAIL)) return TRUE;
    return FALSE;
}

function isUrl($string)
{
    if (filter_var($string, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED)) return TRUE;
    return FALSE;
}

function isNumber($string)
{
    $pattern = "/^[0-9]+$/";
    if (preg_match($pattern, $string)) return TRUE;
    return FALSE;
}

function isWord($string)
{
    $pattern = "/^\w+$/";
    if (preg_match($pattern, $string)) return TRUE;
    return FALSE;
}