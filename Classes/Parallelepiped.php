<?php

namespace Classes;

class Parallelepiped extends Rectangle
{
    private $height;

    public function setParallelepipedDimensions(float $length, float $width, float $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getParallelepipedDimensions(): array
    {
        return [$this->length, $this->width, $this->height];
    }

    public function __construct()
    {
        parent::__construct();
        $this->height;
    }

    public function __toString()
    {
        return "Parallelepiped length = $this->length cm, width = $this->width cm, height = $this->height cm";
    }

    public function volume(): float
    {
        return $this->area() * $this->height;
    }

    public function area_parallelepiped(): float
    {
        return (2 * $this->area() + ($this->perimeter() * $this->height));
    }

    public function parallelepipedDiagonal(): float
    {
        return sqrt($this->length ** 2 + $this->width ** 2 + $this->height ** 2);
    }
}
