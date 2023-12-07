<?php

require_once __DIR__ . "/../Models/TodoList.php";
require_once __DIR__ . "/../BusinessLogics/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogics/RemoveTodoList.php";
require_once __DIR__ . "/../BusinessLogics/ShowTodoList.php";

addTodoList("Makan");
addTodoList("Minum");
addTodoList("Tidur");
addTodoList("Mandi");

$isSuccess =  removeTodoList(2);

showTodoList();
var_dump($isSuccess);
