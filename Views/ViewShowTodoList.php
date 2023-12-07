<?php

require_once __DIR__ . "/../Models/TodoList.php";
require_once __DIR__ . "/../BusinessLogics/ShowTodoList.php";
require_once __DIR__ . "/../Helpers/Input.php";
require_once __DIR__ . "/../Views/ViewAddTodoList.php";
require_once __DIR__ . "/../Views/ViewRemoveTodoList.php";

function viewShowTodoList()
{
    while (true) {
        showTodoList();

        echo "MENU" . PHP_EOL;
        echo "1. Tambah Todo" . PHP_EOL;
        echo "2. Hapus Todo" . PHP_EOL;
        echo "x. Keluar" . PHP_EOL;

        $pilihan = input("Pilih menu: ");

        if ($pilihan == "1") {
            viewAddTodoList();
        } else if ($pilihan == "2") {
            viewRemoveTodoList();
        } else if ($pilihan == "x") {
            break;
        } else {
            echo "Pilihan tidak dimengerti" . PHP_EOL;
        }
    }

    echo "Good Bye" . PHP_EOL;
}
