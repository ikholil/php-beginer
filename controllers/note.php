<?php 

$config = require "config.php";

$header="View Note";
$id = $_GET["id"];
$currentUserId = 1;

$db = new Database($config["database"], "root", "Kholil@01902");

$note = $db->query("select * from notes where id= :id", ['id'=> $id])->findOrFail();


authorize($note['user_id']===$currentUserId);

require"views/note.view.php";