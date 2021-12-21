<?php

class Validator
{

    public static function is_email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function isNotLoggedIn()
    {
        return (!isset($_SESSION['authorizedUser']))? true : false;
    }

    public static function isAdmin()
    {
        return ($_SESSION['authorizedUser']['role'] === 'admin')? true : false;
    }

    public static function itsMe($id)
    {
        return ((int)$id === (int)$_SESSION['authorizedUser']['id'])? true : false;
    }

    public static function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = strip_tags($data);
        $data = htmlspecialchars($data);

        return $data;
    }
}