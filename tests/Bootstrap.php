<?php

/**
 * PHPUnit Test Bootstrap
 * @author Jason Brown <jason.brown@jbfreelance.co.uk> 
 */

$handle = opendir('../lib');
while(false !== ($file = readdir($handle)))
{
    if ($file != "." && $file != "..") {
        require_once '../lib/'.$file;
    }
}
?>
