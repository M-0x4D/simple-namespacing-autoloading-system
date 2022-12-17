<?php
require_once 'install.php';
require_once 'Debug/Debugger.php';
spl_autoload_register('autoload');

function autoload()
{
    $arr = Install::autoloads();
    foreach ($arr as $directories) {
        foreach ($directories as $directory) {
            if (!empty($directory)) {
                $files = array_diff(scandir($directory), array('.', '..'));
                foreach ($files as $file) {
                    require_once "$directory\\$file";
                }
            }
        }
    }
}
