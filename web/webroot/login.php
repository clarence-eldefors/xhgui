<?php
require dirname(__DIR__) . '/bootstrap.php';
if (isset($_POST['login']) && $_POST['login'] == Xhgui_Config::read('login') && 
    $_POST['password'] == Xhgui_Config::read('password')) {
    session_start();
    $_SESSION['loggedin'] = true;
    header('Location: /'); exit;
}

$template = Xhgui_Template::load('runs/login.twig');
echo $template->render(array(
    'base_url' => '/login.php'
));
