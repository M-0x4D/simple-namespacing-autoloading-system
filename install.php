<?php

require_once 'Debug/Debugger.php';

class Install
{

    public static function autoloads()
    {
        $jsonContent = file_get_contents('Adel-composer.json');
        $arrContent = json_decode($jsonContent, true);
        return $arrContent;
    }
}
