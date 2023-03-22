<?php

$todo_string = file_get_contents('./todolist.json');

header('Content_Type: application/json');

$todo_list = json_decode($todo_string, true);

echo $todo_string;

?> 