<?php

require_once __DIR__ . "/../Helper/Input.php";
require_once __DIR__ . "/../BusinessLogic/RemoveTodoList.php";

function viewRemoveTodoList()
{
    echo "MENGHAPUS TODO" . PHP_EOL;

    $pilihan = input("Nomor (x untuk batalkan)");

    if ($pilihan == "x") {
        echo "Batal menghapus todo" . PHP_EOL;
    } else {
        $success = RemoveTodoList($pilihan);

        if ($success) {
            echo "Sukses menghapus todo No. $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo No. $pilihan" . PHP_EOL;
        }
    }
}
