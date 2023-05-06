<?php
trait Colors
{
    protected $colors;


    public function setColors($colorsArray)
    {
        $this->colors = $colorsArray;
    }

    public function getColors()
    {
        return $this->colors;
    }
}
