<?php

namespace Bay;

require_once __DIR__ . "/vendor/autoload.php";

use Exception;
use Faker;

// Initialization fake data library
$faker = Faker\Factory::create();

class Customized
{
    // Function that generates a fake name
    public static function generateName(int $words = 2): string
    {
        if ($words < 2) {
            throw new Exception("Method generateName() errors, please set the argument value greater than or equal to 2");
        }
        global $faker;
        $name = "";
        do {
            $name = $faker->name();
        } while (count(explode(" ", $name)) !== $words);

        return $name;
    }

    // Function that generates a fake email
    public static function generateEmail(string $name): string
    {
        $temp = strtolower(str_replace(" ", "", $name));
        $temp = substr($temp, 0, 7);
        $email = $temp . rand(1, 100) . "@";
        $domain = ["gmail", "yahoo", "outlook", "hotmail", "live", "msn", "icloud", "zoho"];

        $rand = rand(0, count($domain) - 1);
        $email .= $domain[$rand] . ".com";

        return $email;
    }

    // Function that generates a random string
    public static function generateRandomString(int $length = 10, bool $number = true, bool $char = true): string
    {
        $numbers = "0123456789";
        $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";

        if ($number and $char) {
            $characters .= $numbers;
        } else if ($number and !$char) {
            $characters = $numbers;
        } else if (!$number and !$char) {
            throw new Exception("Method generateRandomString() error, the second and third argument can't be set as false at same time");
        }

        $charactersLength = strlen($characters);
        $randomString = "";
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        return $randomString;
    }

    // Function that generates a random brand
    public static function generateBrand(): string
    {
        $brand = ["Hamada", "Heidelberg", "Shinohara", "Komori", "Sakurai"];
        return $brand[rand(0, count($brand) - 1)];
    }

    // Function that generates a random contact number (ID)
    public static function generateContact(): string
    {
        return $contact = "08" . self::generateRandomString(rand(10, 12), true, false);
    }

    public static function generateDistributorName()
    {
        $name = explode(" ", self::generateName())[1];
        $randomPrefix = ["CV", "PT"];
        $randomSuffix = ["Paper", "Wood", "Print", "Family", "Ink"];
        return $randomPrefix[rand(0, count($randomPrefix) - 1)] . ". $name " . $randomSuffix[rand(0, count($randomSuffix) - 1)];
    }
}
