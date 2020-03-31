<?php
// Slå på all felrapportering. Bra under utveckling, dåligt i produktion.
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include_once 'bank.class.php';


// Skapa ett konto
$myAccount = new Bank("Hans", 4000);
echo "<p>Saldo: " . $myAccount->getSaldo();

// Sätt in pengar
echo "<p>Saldo: " . $myAccount->deposit(1000);

// Ta ut pengar
echo "<p>Saldo: " . $myAccount->withdraw(3500);

// Se växlingskurser för EUR
$rates = Bank::currencyExchange();
echo "<p>Växlingskurs för EUR: " . $rates["EUR"];
