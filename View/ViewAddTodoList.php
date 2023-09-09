<?php

require_once "../Model/TodoList.php";
require_once "../Helper/Input.php";
require_once "../BusinessLogic/AddTodoList.php";

function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;
    viewAddTodoList();

    $todo = input("Todo (x untuk batal) ");
    if($todo == "x") {
        echo "Batal menambah todo" . PHP_EOL;
    } else {
        addTodoList($todo);
        echo "Todo berhasil ditambahkan" . PHP_EOL;
    }
}

function viewAddTodoList()
{
    echo "MENAMBAH TODO" . PHP_EOL;
}