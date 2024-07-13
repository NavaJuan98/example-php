<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config["database"]);

$currentUserId = 3;


$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    "id" => $_GET["id"]
]) ->findOrFail();

authorize($currentUserId === $note["user_id"]);

view("notes/show.view.php", [
    "heading"=> "Note",
    "note" => $note,
]);