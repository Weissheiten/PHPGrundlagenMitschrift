<?php
/**
 * Created by PhpStorm.
 * User: FloLeBlanc
 * Date: 19.10.2016
 * Time: 16:09
 */

namespace PHPGrundlagen\Shapes;

use \PHPGrundlagen\HelperClasses\Shape as Shape;

/**
 * Class Triangle
 *
 * represents a triangle
 */
class Triangle extends Shape
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