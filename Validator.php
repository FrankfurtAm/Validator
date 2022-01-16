<?php

class Validator
{

    public static function is_email(string $email)
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

    public static function itsMe(int $id)
    {
        return ($id === (int)$_SESSION['authorizedUser']['id'])? true : false;
    }

    public static function verifyPasswords(string $password1, string $password2)
    {
        return $password1 === $password2; 
    }
}