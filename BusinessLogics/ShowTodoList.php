<?php

function showTodoList()
{
    global $todoList;

    echo "Todo List" . PHP_EOL;

    foreach ($todoList as $idx => $todo) {
        echo "$idx. $todo" . PHP_EOL;
    }
}
