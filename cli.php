<?php

include __DIR__ . '/src/Framework/Database.php';

use Framework\Database;

$db = new Database('mysql', [
    'host' => '',
    'port' => '',
    'dbname' => ''
], '', '');

$sqlFile = file_get_contents("./database.sql");

$db->query($sqlFile);
