<?php

class Validator
{

    /**
        Parameters: 
            string - $email (string that is checked for mail)

        Description: Checking if a string is mail

        Return value: bool
    **/

    public static function isEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
        Parameters: 
            string - $password1 (first password)
            string - $password2 (second password)

        Description: Comparing two passwords for identity

        Return value: bool
    **/

    public static function verifyPasswords(string $password1, string $password2)
    {
        return $password1 === $password2; 
    }

    /**
        Parameters:

        Description: Checking if the user is authorized

        Return value: bool
    **/

    public static function isNotLoggedIn()
    {
        return (!isset($_SESSION['authorizedUser']))? true : false;
    }

    /**
        Parameters:

        Description: Checking the role in the session

        Return value: bool
    **/

    public static function isAdmin()
    {
        return ($_SESSION['authorizedUser']['role'] === 'admin')? true : false;
    }

    /**
        Parameters:
            int - $id(External id)

        Description: Checking external id from session

        Return value: bool
    **/

    public static function itsMe(int $id)
    {
        return ($id === (int)$_SESSION['authorizedUser']['id'])? true : false;
    }

}