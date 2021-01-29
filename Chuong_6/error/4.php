<?php
ini_set("display_errors","off");
ini_set("log_errors","on");
ini_set("error_log","erro.log");
    $config = ini_get_all();

    echo "<pre>";
    print_r($config);
    echo"</pre>";
?>