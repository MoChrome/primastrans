<?php

namespace App\Models;

class Company
{
    private static $profil = [
        "name" => "PRIMASTRANS TRI MANDIRI",
        "email" => "primas.trans@yahoo.com",
        "address" => "Jalan Kapten Naseh No.26",
        "address2" => "Tasikmalaya, Jawa Barat",
        "image" => "people.jpg",
        "contact" => "+62 852-2292-2777 (Cahya)",
        "contact2" => "+62 812-2284-633 (Salma)"
    ];

    public static function all()
    {
        return self::$profil;
    }
}
