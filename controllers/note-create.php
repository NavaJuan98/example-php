<?php

require "Validator.php";
$config = require "./config.php";

$db = new Database($config["database"]);
$currentUserId = 3;
//  dd($_SERVER);

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["description"])) {
        $errors = [];

        if (!Validator::string($_POST["description"], 1, 1000)) {
            $errors["description"] = "A body of no more than 1,000 characters is required";
        }


        if (empty($errors["description"])) {
            $description = strip_tags($_POST["description"]);
            $db->query("INSERT INTO notes(description, user_id) VALUES(:description, :user_id)", [
                "description" => $description,
                "user_id" => $currentUserId
            ]);
        }
    }
}


require "views/note-create.view.php";
