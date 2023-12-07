<?php

function showTodoList()
{
    global $todoList;

    echo "TODO LIST" . PHP_EOL;

    foreach ($todoList as $idx => $todo) {
        echo "$idx. $todo" . PHP_EOL;
    }
}
