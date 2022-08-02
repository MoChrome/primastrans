<?php

namespace App\Models;

class Company
{
    private static $profil = [
        "name" => "PRIMASTRANS TRI MANDIRI",
        "email" => "primastrans@trimandiri.com",
        "address" => "Jalan Kapten Naseh No.26",
        "address2" => "Tasikmalaya, Jawa Barat",
        "image" => "people.jpg"
    ];

    public static function all()
    {
        return self::$profil;
    }
}
