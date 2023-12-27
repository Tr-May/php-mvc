<?php 
// index.php
require_once 'controller.php';

// Create instances of Model, View, and Controller
$model = new UserModel();
$view = new UserView();
$controller = new UserController($model, $view);

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $controller->setUsername($username);
}

// Display the form or user information based on user input
if ($controller->getUsername()) {
    $controller->showUser();
} else {
    $controller->showForm();
}
