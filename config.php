<?php
require 'vendor/autoload.php';

/*
 * Connection to MongoDB
 * 
 * $connection = new MongoClient(); // connects to localhost:27017
 * 
 * For remote host connection
 * 
 * $connection = new MongoClient( "mongodb://example.com" ); // connect to a remote host (default port: 27017)
 * $connection = new MongoClient( "mongodb://example.com:65432" ); // connect to a remote host at a given port
 */



$client = new MongoDB\Client();

$Mahasiswa = $client->Mahasiswa;

// $result = $Mahasiswa->createCollection('Mahasiswa');

// var_dump($result);
?>