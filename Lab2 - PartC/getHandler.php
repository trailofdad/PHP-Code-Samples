<?php

echo "Hello, " . $_GET["firstname"] . " " . $_GET["lastname"] . "!<br/>";

$month = $_GET["month"];
$day = $_GET["day"];

zodiac($month, $day);

function zodiac($month, $day){
    if($month == 4 && $day <=19)
    {
        echo "Your zodiac sign is: Ares";
    }
    elseif($month == 4 && $day >=20)
    {
        echo "Your zodiac sign is: Taurus";
    }
    elseif($month == 5 && $day <=20)
    {
        echo "Your zodiac sign is: Taurus";
    }
    elseif($month == 5 && $day >20)
    {
        echo "Your zodiac sign is: Gemini";
    }
    elseif($month == 6 && $day <=21)
    {
        echo "Your zodiac sign is: Gemini";
    }
    elseif($month == 6 && $day >21)
    {
        echo "Your zodiac sign is: Cancer";
    }
    elseif($month == 7 && $day <=22)
    {
        echo "Your zodiac sign is: Cancer";
    }
    elseif($month == 7 && $day >=23)
    {
        echo "Your zodiac sign is: Leo";
    }
    elseif($month == 8 && $day <=22)
    {
        echo "Your zodiac sign is: Leo";
    }
    elseif($month == 8 && $day >=23)
    {
        echo "Your zodiac sign is: Virgo";
    }
    elseif($month == 9 && $day <=22)
    {
        echo "Your zodiac sign is: Virgo";
    }
    elseif($month == 9 && $day >22)
    {
        echo "Your zodiac sign is: Libra";
    }
    elseif($month == 10 && $day <=22)
    {
        echo "Your zodiac sign is: Libra";
    }
    elseif($month == 10 && $day >=23)
    {
        echo "Your zodiac sign is: Scorpio";
    }
    elseif($month == 11 && $day <=21)
    {
        echo "Your zodiac sign is: Scorpio";
    }
    elseif($month == 11 && $day >=22)
    {
        echo "Your zodiac sign is: Sagittarius";
    }
    elseif($month == 12 && $day <=21)
    {
        echo "Your zodiac sign is: Sagittarius";
    }
    elseif($month == 12 && $day >=22)
    {
        echo "Your zodiac sign is: Capricorn";
    }
    elseif($month == 1 && $day <=19)
    {
        echo "Your zodiac sign is: Capricorn";
    }
    elseif($month == 1 && $day >=20)
    {
        echo "Your zodiac sign is: Aquarius";
    }
    elseif($month == 2 && $day <=18)
    {
        echo "Your zodiac sign is: Aquarius";
    }
    elseif($month == 2 && $day >=19)
    {
        echo "Your zodiac sign is: Pisces";
    }
    elseif($month == 3 && $day <=20)
    {
        echo "Your zodiac sign is: Pices";
    }
    elseif($month == 3 && $day >=21)
    {
        echo "Your zodiac sign is: Ares";
    }
}//end function