<?php

require_once "../Helper/Input.php";

$name = input("Nama");
echo "Hello $name" . PHP_EOL;

$umur = input("umur");
echo "umur : $umur Tahun";
