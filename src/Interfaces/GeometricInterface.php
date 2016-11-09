<?php

namespace HTL3R\GeoShapes\Interfaces;

/**
 * Interface GeometricInterface
 * @package GeometricShape
 *
 * Ensures, that getting of the color and calculating the Perimeter are possible
 */
interface GeometricInterface
{
    /**
     * @return string color as hex
     */
    public function getColor();

    /**
     * @return double perimeter
     */
    public function calculatePerimeter();
}