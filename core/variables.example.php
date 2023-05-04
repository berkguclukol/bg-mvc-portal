<?php
class Variables {
    static function SITE_TITLE(): string
    {
        return "[SITE_TITLE]"; // The website title.
    }
    static function SITE_URL(): string
    {
        return "http://[SITE_URL]/"; // The website address.
    }
    static function PUBLIC_ROOT(): string
    {
        return self::SITE_URL() . "public/"; // The path to the public directory.
    }
    static function CONTROLLERS_PATH(): string
    {
        return "application/controllers"; // The path to the controllers files.
    }
    static function VIEWS_PATH(): string
    {
        return "application/views"; // The path to the views files.
    }
    static function PRIVATE_KEY(): string
    {
        return "[PRIVATE_KEY]"; // The key to use to encrypt the data. It must be unique. Every encrypted data can be opened with the same key.
    }
    static function DB_HOST(): string
    {
        return ""; // Database Hostname
    }
    static function DB_NAME(): string
    {
        return ""; // Database Name
    }
    static function DB_USERNAME(): string
    {
        return ""; // Database Username
    }
    static function DB_PASSWORD(): string
    {
        return ""; // Database Password
    }
    static function DB_CHARSET(): string
    {
        return "UTF8"; // Database Charset
    }
}