<?php
require_once 'Pulsar/pulsar.php';
$args = array('username' => 'raphael@maiasolucoes.com.br', 'password' => 'raphael');
$token = Pulsar::login($args);
print Pulsar::who($token);