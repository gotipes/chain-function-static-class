<?php

class Calculator
{   
    public static $value = 0;

    protected static $onlyInstance;

    protected function __construct () 
    {
        // disable creation of public instances 
    }

    protected static function getself()
    {
        if (static::$onlyInstance === null) 
        {
            static::$onlyInstance = new Calculator;
        }

        return static::$onlyInstance;
    }

    /**
     * add to value
     * @param numeric $num 
     * @return \Calculator
     */
    public static function add($num) 
    {
        static::$value += $num;
        return static::getself();
    }

    /**
     * substruct
     * @param string $num
     * @return \Calculator
     */
    public static function subtract($num) 
    {
        static::$value -= $num;
        return static::getself();
    }

    /**
     * multiple by
     * @param string $num
     * @return \Calculator
     */
    public static function multiple($num) 
    {
        static::$value *= $num;
        return static::getself();
    }

    /**
     * devide by
     * @param string $num
     * @return \Calculator
     */
    public static function devide($num) 
    {
        static::$value /= $num;
        return static::getself();
    }

    public static function result()
    {
        return static::$value;
    }
}
