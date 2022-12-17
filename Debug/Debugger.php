<?php

class Debugger
{
    public static function die_dump(...$variables) : void
    {

        echo '<pre>';
        foreach($variables as $variable){
            var_dump($variable);
        }
        echo '<pre>';
        exit;

    }
}