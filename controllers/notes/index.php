<?php

$config = require "./config.php";

$db = new Database($config["database"]);

$currentUserId = 3;

$notes = $db->query("SELECT * FROM notes WHERE user_id = :user_id", [
    "user_id" => $currentUserId
])->get();

require "views/notes/index.view.php";