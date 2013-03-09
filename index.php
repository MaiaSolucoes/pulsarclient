<?php
require_once 'Pulsar/pulsar.php';

$args = array('username' => 'raphael@maiasolucoes.com.br', 'password' => 'raphael');
$token = Pulsar::login($args);
print $token;


/*if ($_SESSION["token"]){
    print "VOCE SE AUTENTICO";
} else {
    print "VOCE EH BURRO";
}*/