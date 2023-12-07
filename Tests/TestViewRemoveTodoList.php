<?php

require_once __DIR__ . "/../Models/TodoList.php";
require_once __DIR__ . "/../BusinessLogics/AddTodoList.php";
require_once __DIR__ . "/../BusinessLogics/ShowTodoList.php";
require_once __DIR__ . "/../Views/ViewRemoveTodoList.php";

addTodoList("Makan");
addTodoList("Minum");
addTodoList("Mandi");
addTodoList("Tidur");

showTodoList();
viewRemoveTodoList();
showTodoList();
