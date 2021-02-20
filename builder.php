<?php

$filename = "version";
$version = trim(shell_exec('git symbolic-ref --short -q HEAD'));
file_put_contents($filename, $version);

$query = 'composer install';
$tmp = exec($query);