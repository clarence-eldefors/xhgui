<?php
/**
 * Domain object for handling profile runs.
 *
 * Provides method to manipulate the data from a single profile run.
 */
class Xhgui_Login
{
    public static function checkLogin ()
    {
        session_start();

        if (!isset($_SESSION['loggedin'])) {
            header('Location: /login.php');
            exit();
        }
    }
}