<?php 

session_start();
// require models
require_once __DIR__ . '/app/User.php';
require_once __DIR__ . '/app/Event.php';
require_once __DIR__ . '/app/Attend.php';


// require helper classes
require_once __DIR__ . '/app/Http/Controllers/Auth/AuthController.php';
require_once __DIR__ . '/app/Http/Controllers/AttendsController.php';
require_once __DIR__ . '/app/Http/Controllers/Input.php';

