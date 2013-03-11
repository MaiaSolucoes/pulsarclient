<?php
require_once 'Pulsar/pulsar.php';

$args = array('username' => 'raphael@maiasolucoes.com.br', 'password' => 'rap3hael');
$token = Pulsar::login($args);
print $token->id;
