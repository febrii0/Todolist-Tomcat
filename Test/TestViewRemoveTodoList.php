<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

AddTodoList("Muhamad");
AddTodoList("Faisal");
AddTodoList("Basri");
AddTodoList("Belajar");
AddTodoList("PHP dasar");

showTodoList();

viewRemoveTodoList();

showTodoList();
