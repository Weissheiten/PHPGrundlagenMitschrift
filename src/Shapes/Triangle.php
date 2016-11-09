<?php

namespace HTL3R\GeoShapes\Shapes;

use \HTL3R\GeoShapes\Interfaces\GeometricInterface as GeometricInterface;
use \HTL3R\GeoShapes\HelperClasses\Shape as Shape;

/**
 * Class Triangle
 *
 * represents a triangle
 */
class Triangle extends Shape implements GeometricInterface
{
    protected $shapeName = "Triangle";

    public function __construct(int $side_length, string $color)
    {
        parent::__construct($side_length, $color, $this->shapeName);
    }

    /**
     * @return float perimeter
     */
    public function calculatePerimeter() : float
    {
        return 3*$this->side_length;
    }
}