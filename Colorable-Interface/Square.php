<?php
class Square implements Colorable {
    public $height;
    public function __construct($height ,$color)
    {
        $this->height=$height;
        $this->color =$color;

    }



    public function howToColor($color)
    {
        // TODO: Implement howToColor() method.
    }
}