<?php

require_once __DIR__ . "/../Helpers/Input.php";
require_once __DIR__ . "/../BusinessLogics/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;
    $pilihan = input("Nomor todo (x untuk batalkan)");

    if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $isSuccess = removeTodoList($pilihan);
        if ($isSuccess) {
            echo "Sukses menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo" . PHP_EOL;
        }
    }
}
