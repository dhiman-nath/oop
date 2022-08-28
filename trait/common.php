<?php

require "bank.php";
class Bar{
	use Bank;
}

$account = new Bar;
$account->DPS();
echo "<br/>";
$account->Savings();

?>