<?php

require_once __DIR__ . "/../Models/TodoList.php";
require_once __DIR__ . "/../Helpers/Input.php";
require_once __DIR__ . "/../BusinessLogics/AddTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;

    $todo = input("Todo (x untuk batal)");

    if ($todo == 'x') {
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
    }
}
