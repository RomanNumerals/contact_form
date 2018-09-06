<?php

$dsn = 'mysql:host=127.0.0.1;dbname=user_submissions';

$username = 'root';

$password = '';

$options = [];

try {
  $connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
    die($e);
}
