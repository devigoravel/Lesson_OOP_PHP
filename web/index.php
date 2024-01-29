<?php

// Статические свойства и методы 

class Room
{
    // Статическое ствойство

    public static $color = 'Красная';

    // Статический метод

    public static function getColor()
    {
        echo "Привет, я комната";
    }
    
}

echo Room::$color;
echo '<br>';
Room::getColor();



