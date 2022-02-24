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

    public static function pwd($value)
    {
        $regex = 
        return (bool) filter_var($value, FILTER_VALIDATE_REGEXP);
    }
}
}
