<?php

class TestSingleton
{
    private static $instance;

    private function __construct() {}

	public static function getInstance()
    {
        if (! isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function __clone()
    {
        throw new Exception('You cannot clone singleton object');
    }

    // other methods here ...
}
var_dump(TestSingleton::getInstance());