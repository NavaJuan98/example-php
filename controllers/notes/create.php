<?php

use Core\Database;
use Core\Validator;

require base_path("Core/Validator.php");

$config = require base_path("config.php");

$db = new Database($config["database"]);
$currentUserId = 3;
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["description"])) {

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

view("notes/create.view.php", [
    "heading"=> "Create",
    "errors" => $errors,
]);