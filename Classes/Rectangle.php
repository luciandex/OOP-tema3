<?php

namespace Classes;

class Rectangle
{
    /**
     * @var float
     */
    protected $length;

    /**
     * @var float
     */
    protected $width;


    public function setDimensions(float $length, float $width)
    {
        $this->length = $length;
        $this->width = $width;
    }

    public function getDimensions(): array
    {
        return [$this->length, $this->width];
    }

    public function __construct()
    {
        $this->length;
        $this->width;
    }

    public function perimeter(): float
    {
        return $this->length * 2 + $this->width * 2;
    }

    public function area(): float
    {
        return $this->length * $this->width;
    }
}
