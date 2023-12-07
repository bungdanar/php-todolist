<?php

require_once __DIR__ . "/../Views/ViewShowTodoList.php";
require_once __DIR__ . "/../BusinessLogics/AddTodoList.php";

addTodoList("Makan");
addTodoList("Minum");

viewShowTodoList();
