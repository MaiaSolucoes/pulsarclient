<?php
require_once 'Pulsar/pulsar.php';
$args = array('username' => 'raphael@maiasolucoes.com.br', 'password' => 'raphael');
$token = Pulsar::login($args);
print "$token<br>";
$t = "http://pul.cicero.maiasolucoes.com.br/user/user?token=$token";
$d = file_get_contents($t);
$de = json_decode($d);
print_r($de);
//print_r(Pulsar::who($token));