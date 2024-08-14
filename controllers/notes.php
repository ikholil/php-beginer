<?php 

$header="Notes";

$config = require "config.php";

$db = new Database($config["database"], "root", "Kholil@01902");

$notes = $db->query("select * from notes where user_id=1")->get();


require"views/notes.view.php";