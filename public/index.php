<?php
require_once "../vendor/autoload.php";

$filename = "/home/anton/Desktop/filer/Forum/ForumProject/database";
$dsn = "sqlite:$filename";

$pdo = new PDO($dsn);

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
$pdo->exec("PRAGMA foreign_keys = ON");


echo "Hello World!";