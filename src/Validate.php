<?php

namespace App;

class Validate
{
    public static function email($value)
    {
        return (bool) filter_var($value, FILTER_VALIDATE_EMAIL);
    }

    public static function url($value)
    {
        return (bool) filter_var($value, FILTER_VALIDATE_URL);
    }

    public static function password($value)
    {
        // Option 1: Use the "FILTER_VALIDATE_REGEXP"

        // $regex = "/^[0-9]{6,8}$/";
        // return (bool) filter_var($value, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => $regex]]);

        // Option 2: Use the "preg_match"
        return (bool) preg_match('/^[0-9]{6,8}$/', $value);
    }
}
