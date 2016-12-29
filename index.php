<?php

spl_autoload_extensions(".php"); // comma-separated list
spl_autoload_register();

foreach (glob("system/vendor/*.php") as $filename)
{
    include $filename;
}

require('system/engine/hf_core.php');

$core = new HF_Core();
$core->run();