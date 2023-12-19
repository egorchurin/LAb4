<?php
$db["host"] = "77.222.57.185";
$db["port"] = "22";
$db["user"] = "egorchurin";
$db["pass"] = "^rXKXQjFnG2cbHAZ";
$db["dbname"] = "books";
$pdo = new PDO("pgsql:" . sprintf(
    "host=%f;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    $db["dbname"]
));