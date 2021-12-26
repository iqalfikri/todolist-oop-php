<?php
require_once __DIR__ . "../../Entity/TodoList.php";
require_once __DIR__ . "../../Repository/TodolistRepository.php";
require_once __DIR__ . "../../Service/TodolistService.php";
require_once __DIR__ . "../../View/TodolistView.php";
require_once __DIR__ . "../../Helper/InputHelper.php";

use Entity\TodoList;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;
use View\TodolistView;

function testViewShowTodoList(): void {
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistView->showTodolist();
}

function testViewAddTodoList(): void {
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();   
    $todolistView->addTodolist();

    $todolistService->showTodolist(); 
   
    $todolistView->addTodolist();
    $todolistService->showTodolist();   
}

function testViewRemoveTodoList(): void {
    $todolistRepository = new TodolistRepositoryImpl;
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();   
    $todolistView->removeTodolist();

    $todolistService->showTodolist(); 
   
    $todolistView->removeTodolist();
    $todolistService->showTodolist();   
}

testViewRemoveTodoList();
