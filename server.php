<?php

$todo_string = file_get_contents('./todolist.json');

header('Content_Type: application/json');

$todo_list = json_decode($todo_string, true);

$new_todo = isset($_POST['todo']) ? $_POST['todo'] : null;

if ($new_todo !== null){
    $todo_list[] = $new_todo;
}

$new_array_todo = json_encode($todo_list);
file_put_contents('./todolist.json',$new_array_todo);

echo json_encode($todo_list);

?> 