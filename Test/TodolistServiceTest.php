<?php
require_once __DIR__ . "../../Entity/TodoList.php";
require_once __DIR__ . "../../Repository/TodolistRepository.php";
require_once __DIR__ . "../../Service/TodolistService.php";

use Entity\TodoList;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist():void{
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistRepository->todoList[1] = new TodoList("Belajar PHP");
    $todolistRepository->todoList[2] = new TodoList("Belajar PHP OOP");
    $todolistRepository->todoList[3] = new TodoList("Belajar PHP Database");
    
    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodolist();
}

function testAddTodolist():void{
    $todolistRepository = new TodolistRepositoryImpl;
    
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistService->showTodolist();
}

function testRemoveTodolist():void{
    $todolistRepository = new TodolistRepositoryImpl;
    
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");
    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(3);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(2);
    $todolistService->showTodolist();

    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();
}

testRemoveTodolist();
