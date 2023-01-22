<?php
session_start();
$servername = "localhost";
$database_name = 'participant';
$username = "root";
$password = "";

try {
    $connexion = new PDO("mysql:host=$servername;dbname=$database_name", $username, $password);
    // echo "connection reussi";
} catch(Exception $e) {
    die("Erreur de connexion:" . $e->getMessage());
}