<?php

namespace HTL3R\GeoShapes\Abstracts;

/**
 * Class GeometricShape
 * @package Abscracts Provices the base for any geometric shape
 */
abstract class GeometricShape
{
    /* @var string $color */
    protected $color;

    /**
     * Gets the color of the geometric shape (Hex)
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
}