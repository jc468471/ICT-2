<?php
$user = 'root';
$pass = '';
$db = 'cart';

$db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
echo "great work";

?>