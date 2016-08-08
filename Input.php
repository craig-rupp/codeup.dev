<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key)
    {
        // TODO: Fill in this function
        //if(isset($_REQUEST[$key])){
            return isset($_REQUEST[$key]);
        //}
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */

    public static function isPost()
    {
        return $_POST;
    }

    public static function get($key, $default = null)
    {
        // TODO: Fill in this function
        if(self::has($key)){
            return $_REQUEST[$key];
        } else {
            return $default;
        }
    }

    public static function getString($key)
    {
        $string = self::get($key);

        if(!is_string($string) || is_numeric($string)){
            throw new Exception('$string must be a string');
        }
        return trim($string);
    }

    public static function getNumber($key){
        $number = self::get($key);

        if(is_numeric($number)){
            return floatval($number);
        } elseif(!is_numeric($number)) {
            throw new Exception('$number must be numeric!');
        }
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
