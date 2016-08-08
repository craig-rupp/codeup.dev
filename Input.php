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

    public static function getString($key, $min = 0, $max = 100)
    {
        $string = self::get($key);

        if(!is_string($string) || !is_numeric($min) || !is_numeric($max)){
            throw new InvalidArgumentException("$string must be a string");
        } elseif(is_numeric($string)){
            throw new DomainException("{$string} is the  wrong type!");
        } elseif(strlen($string) > $max) {
            throw new LengthException("{$string} is too long, less characters");
        } elseif(strlen($string) < $min){
            throw new LengthException("{$string} contains no characters, type something!");
        }
        return trim($string);
    }

    public static function getNumber($key, $min = 0, $max = 100 ){
        $number = self::get($key);

        if(!is_numeric($number) || !is_numeric($min) || !is_numeric($max)){
            throw new InvalidArgumentException("{$number} We need integers!");
        } elseif(is_string($number){
            throw new DomainException("{$number} is the wrong type");
        }elseif($number < $min){
            throw new RangeException("{$number} does not exist, please enter some values!");
        } elseif($number > $max){
            throw new RangeException("{$number} Your number exceeds the max!!");
        } elseif(empty(self::get($key))){
            throw new OutOfRangeException("{$number} hasn't been provided");   
        } 
        return floatval($number);
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}
