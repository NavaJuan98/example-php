<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config["database"]);

$currentUserId = 3;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["id"])) {

        $note_to_delete = $db->query("SELECT * FROM notes WHERE id = :id", [
            "id" => $_POST["id"]
        ])->findOrFail();

        authorize($currentUserId === $note_to_delete["user_id"]);

        $db->query("delete from notes where id = :id", [
            "id" => $_POST["id"],
        ]);
        header("location: /notes");
        exit();
    }
} else {
    $note = $db->query("SELECT * FROM notes WHERE id = :id", [
        "id" => $_GET["id"]
    ])->findOrFail();

    authorize($currentUserId === $note["user_id"]);
    view("notes/show.view.php", [
        "heading" => "Note",
        "note" => $note,
    ]);
}
