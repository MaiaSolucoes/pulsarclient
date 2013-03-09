<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Raphael
 * Date: 08/03/13
 * Time: 17:57
 * To change this template use File | Settings | File Templates.
 */
session_start();
require_once 'Pulsar/pulsar.php';

if (@$_SESSION["token"]){
    print "BURRO, VOCE ESTA AUTENTICADO";
} else {
    print "VOCE DEVE TER UMA CABEÇA DE FREEZER";
}