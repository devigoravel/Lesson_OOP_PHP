<?php


class Room
{
    // Public - публичное свойство, доступно везде в коде
    public $color = 'красная';

    // Private - приватное свойство, доступное только внутри класса
    private $size = '40';
    
    //Protected - защищенное свойство, достопное только в дочерних (наследуемых) классах
    protected $window = true;

    public function getColor()
    {
        echo $this->color;
    }

    public function changeColor($newColor)
    {
        $this->color = $newColor;
    }

}

// Создаем экземпляр класса
$object = new Room();

