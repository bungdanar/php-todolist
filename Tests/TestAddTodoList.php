<?php

require_once __DIR__ . "/../Models/TodoList.php";
require_once __DIR__ . "/../BusinessLogics/AddTodoList.php";

addTodoList("Makan");
addTodoList("Minum");
addTodoList("Tidur");

var_dump($todoList);
