<?php
require dirname(__DIR__) . '/bootstrap.php';
Xhgui_Login::checkLogin();
$template = Xhgui_Template::load('runs/custom_create.twig');
echo $template->render(array(
    
));
