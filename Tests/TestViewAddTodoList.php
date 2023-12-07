<?php

require_once __DIR__ . "/../Views/ViewAddTodoList.php";
require_once __DIR__ . "/../BusinessLogics/ShowTodoList.php";
require_once __DIR__ . "/../BusinessLogics/AddTodoList.php";

addTodoList("Makan");
addTodoList("Minum");

for ($i = 0; $i < 2; $i++) {
    viewAddTodoList();
    showTodoList();
}
