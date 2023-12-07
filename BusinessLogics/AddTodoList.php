<?php

function addTodoList(string $todo)
{
    global $todoList;

    $next = sizeof($todoList) + 1;
    $todoList[$next] = $todo;
}
