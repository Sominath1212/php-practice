<?php

function add()
{

    static $count = 0;

    echo "hello world!\n";
    $count++;

    return $count;
}
$cnt = add();
echo $cnt;

echo "\n";
$cnt = add();
echo $cnt;
echo "\n";


$cnt = add();
echo $cnt;
