<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Agata");
addTodoList("Febri");
addTodoList("Sifani");

viewAddTodoList();

showTodoList();

viewAddTodoList();

showTodoList();