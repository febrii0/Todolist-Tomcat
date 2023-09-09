<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/DisplayTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";
require_once "../BusinessLogic/UpdateTodoList.php";
require_once "../BusinessLogic/UpdateTodoListStatus.php";
require_once "../BusinessLogic/UpdateTodoListName.php";
require_once "../BusinessLogic/UpdateTodoListDeadline.php";

AddTodoList("Agata Whindi F");
AddTodoList("Febriansyah Agung T");
AddTodoList("Sifani Amira");

var_dump($todoList); 
