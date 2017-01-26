<?php
require 'vendor/autoload.php';

$user=new AulaEstudio\Author("hsajdhf@sja.com",1234,"AulaEstudio");

$user->setName("Sergio","Benavides");

var_dump($user->getLastName());