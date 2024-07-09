<?php

$config = require "./config.php";

$db = new Database($config["database"]);

$currentUserId = 3;


$note = $db->query("SELECT * FROM notes WHERE id = :id", [
    "id" => $_GET["id"]
]) ->findOrFail();

authorize($currentUserId === $note["user_id"]);

require "views/note.view.php";