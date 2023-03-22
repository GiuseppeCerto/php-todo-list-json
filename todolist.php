<?php

$string = file_get_contents('todolist.json');

$todolist = json_decode($string, true);

$newTodo = [
    'todo' => 'Laravel'
];

array_push($todolist, $newTodo);

$newTodo_json = json_encode($todolist);

file_put_contents('todolist.json', $newTodo_json);

header('Content_Type: application/json');

echo $newTodo_json;

?>