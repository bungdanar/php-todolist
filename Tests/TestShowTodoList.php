<?php

require_once __DIR__ . "/../Models/TodoList.php";
require_once __DIR__ . "/../BusinessLogics/ShowTodoList.php";

$todoList[1] = "Belajar PHP dasar";
$todoList[2] = "Belajar PHP OOP";
$todoList[3] = "Belajar PHP database";

showTodoList();
