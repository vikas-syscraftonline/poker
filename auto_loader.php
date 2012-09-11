<?php

/**
 * Project auto-loader
 * Loads all files from lib directory 
 */

$handle = opendir('lib');
while(false !== ($file = readdir($handle)))
{
    if ($file != "." && $file != "..") {
        require_once 'lib/'.$file;
    }
}
?>
