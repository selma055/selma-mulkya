<?php

// import data/person.php
require_once "data/person.php";

// buat object dari kelas person
$selma = new Person("selma mulkya", "bengkulu");

// tambahkan value nama di object
$selma->nama = "selma mulkya";

// panggil function sayHelloNull dengan parameter
$selma->sayHelloNull("selma mulkya");

// buat object dari kelas person
$mulkya = new Person("kya", "padang");

// tambahkan value nama di object
$mulkya->nama = "selma mulkya";

// panggil function sayHelloNull dengan parameter null
$mulkya->sayHelloNull(null);
