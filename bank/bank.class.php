<?php

class Bank
{
    public static $currencies = array(
        "USD" => 10.34,
        "EUR" => 11.21,
        "NOR" => 1.02
    );

    // Private gör att vi inte kan komma åt egenskapen utifrån, bara genom andra funktioner i koden här inne i klassen.
    private $saldo;

    public function __construct($name, $saldo)
    {
        $this->name = $name;
        $this->saldo = $saldo;
    }

    public function withdraw($amount)
    {
        if ($amount <= $this->saldo && $amount > 0) {
            $this->saldo -= $amount;
            return $this->getSaldo();
        }
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->saldo += $amount;
            return $this->getSaldo();
        }
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    static function currencyExchange()
    {
        return self::$currencies;
    }
}
