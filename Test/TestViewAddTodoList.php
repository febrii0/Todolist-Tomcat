<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodolist.php";
require_once "../BusinessLogic/AddTodoList.php";

AddTodoList("Faisal");
AddTodoList("Basri");

viewAddTodolist();

showTodoList();

viewAddTodolist();

showTodoList();
