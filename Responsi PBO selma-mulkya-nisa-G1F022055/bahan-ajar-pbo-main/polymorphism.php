<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer = new Programmer("selma mulkya");
var_dump($company);

$company->programmer = new BackendProgrammer("el gama");
var_dump($company);

$company->programmer = new FrontendProgrammer("kayshilla");
var_dump($company);

sayHelloProgrammer(new Programmer("selma mulkya"));
sayHelloProgrammer(new BackendProgrammer("el gama"));
sayHelloProgrammer(new FrontendProgrammer("kayshilla"));
