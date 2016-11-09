<?php

namespace PHPGrundlagen\Shapes;

use \PHPGrundlagen\Interfaces\GeometricInterface as GeometricInterface;
use \PHPGrundlagen\HelperClasses\Shape as Shape;

/**
 * Class Square
 *
 * represents a square
 */
class Square extends Shape implements GeometricInterface
{
    protected $shapeName = "Square";

    public function __construct(int $side_length, string $color)
    {
        parent::__construct($side_length, $color, $this->shapeName);
    }

    /**
     * @return float perimeter
     */
    public function calculatePerimeter() : float
    {
        return 4*$this->side_length;
    }
}