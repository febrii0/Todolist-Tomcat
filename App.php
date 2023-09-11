<?php

require_once __DIR__ . "/Model/TodoList.php";
require_once __DIR__ . "/BusinessLogic/ShowTodolist.php";
require_once __DIR__ . "/BusinessLogic/AddTodolist.php";
require_once __DIR__ . "/BusinessLogic/RemoveTodolist.php";
require_once __DIR__ . "/View/ViewShowTodoList.php";
require_once __DIR__ . "/View/ViewAddTodoList.php";
require_once __DIR__ . "/View/ViewRemoveTodoList.php";
require_once __DIR__ . "/Helper/Input.php";

echo "Aplikasi TodoList" . PHP_EOL;

viewShowTodoList();
