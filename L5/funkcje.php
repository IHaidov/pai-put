<?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

class Osoba
{
    public $login;
    public $haslo;
    public $imieNazwisko;
}

$osoba1 = new Osoba;
$osoba1->login = "admin";
$osoba1->haslo = "admin";
$osoba1->imieNazwisko = "Admin";
$osoba2 = new Osoba;
$osoba2->login = "user";
$osoba2->haslo = "user";
$osoba2->imieNazwisko = "User";
