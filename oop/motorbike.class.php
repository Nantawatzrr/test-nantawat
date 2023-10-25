<?php


class Motorbike{
//Properties / Attribute
    public $brand;
    public $size;
    public $gearType;
    public $color;
    public $price;


    // constructor
    function __construct($brand,$size,$gearType,$color,$price)
    {
        $this->brand = $brand;
        $this->size = $size;
        $this->gearType = $gearType;
        $this->color = $color;
        $this->price = $price;
    }



    // Method / behavior
    public function start(){
        echo "Started...";
    }

    public function speed_up(){
        echo "Speed up...";
    }

    public function stop(){
        echo "stop...";
    }


    public function getInfo(){
        $output = "<div>
        <p>Brand $this->brand</p>
        <p>size $this->size</p>
        <p>GearType $this->gearType</p>
        <p>Color $this->color</p>
        <p>Price $this->price</p>
        </div><br><br><hr>";
        return $output;
    }
}
    

?>