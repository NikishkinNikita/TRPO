<?php

$filename = "version";
$version = trim(shell_exec('git symbolic-ref --short -q HEAD'));
file_put_contents($filename, $version);

if(!(is_dir("core"))){
    $query = 'git clone https://github.com/rok9ru/trpo-core "core"';
    $tmp = exec($query);
}