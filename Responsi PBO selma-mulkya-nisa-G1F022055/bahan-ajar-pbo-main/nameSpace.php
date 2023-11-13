<?php

// buat namespace
require "conflict.php";
// import data dari conflict
$conflict1 = new data\satu\Conflict();
// buat object dari namespace yang di buat
$conflict2 = new data\dua\Conflict();
// import data helper
require "helper.php";
// tampilkan helper menggunakan echo
echo Helper\APPLICATION . PHP_EOL;
// masukkan Helper\helpMe();
Helper\helpMe();
