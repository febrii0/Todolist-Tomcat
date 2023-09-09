<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";


AddTodoList("Agata Whindi F");
AddTodoList("Febriansyah Agung T");
AddTodoList("Sifani Amira");
AddTodoList("Agata");
AddTodoList("Febri");

showTodoList();

removeTodoList(3);

showTodoList();

removeTodoList(2);

showTodoList();

$success = RemoveTodoList(4);
var_dump($success);

showTodoList();