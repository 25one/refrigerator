<?php
session_start();

require_once 'Controllers/RefrigeratorController.php';

use RefrigeratorController\RefrigeratorController;

$controller = new RefrigeratorController();

if(!isset($_POST['hook'])) {$hook = 'Start';} else {$hook = $_POST['hook'];}
$action = 'action' . $hook;
$controller->$action();




