<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/ShowTodolist.php";

AddTodoList("Faisal");
AddTodoList("Basri");
AddTodoList("Adit");
AddTodoList("Hari");
AddTodoList("Dwi");

showTodoList();

RemoveTodoList(3);

showTodoList();

$success = RemoveTodoList(5);
var_dump($success);

showTodoList();
