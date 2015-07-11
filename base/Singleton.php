<?php
namespace ctur\base;

use Exception, stdClass;

/**
 * Base Singleton Class.
 * @package app\base
 */
class Singleton extends stdClass
{
    /** @var null|object $_instance */
    private static $_instance = null;

    /**
     * @param array $attributes object attributes.
     * @throws Exception Property '{$property}' is not string.
     */
    private function __construct(array $attributes)
    {
        foreach ($attributes as $property => $value) {
            if (!is_string($property)) {
                throw new Exception("Property '{$property}' is not string.");
            }
            $this->{$property} = $value;
        }
    }

    /**
     * @param array $attributes object attributes.
     * @return null|object
     */
    public static function factory(array $attributes = [])
    {
        if (self::$_instance === null) {
            self::$_instance = new static($attributes);
        }

        return self::$_instance;
    }
}
