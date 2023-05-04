<?php

class SessionManager
{
    static function createSession($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    static function deleteSession($key)
    {
        unset($_SESSION[$key]);
    }

    static function allSessionDelete()
    {
        session_destroy();
    }

    static function getSession($key): string
    {
        return $_SESSION[$key];
    }


    static function isLogged(): bool
    {
        if (isset($_SESSION[AUTH_KEY])) {
            return true;
        } else {
            return false;
        }
    }
}