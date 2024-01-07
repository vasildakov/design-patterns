<?php

namespace VasilDakov\DesignPatterns\Creational\StaticFactoryMethod;

final class Time
{
    private $hours, $minutes;

    // We don't remove the empty constructor because it still needs to be private
    private function __construct(){}

    public static function fromValues($hours, $minutes): Time
    {
        $time = new Time;
        $time->hours = $hours;
        $time->minutes = $minutes;

        return $time;
    }
}
