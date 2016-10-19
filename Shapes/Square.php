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
 * Class Square
 *
 * represents a square
 */
class Square extends Shape
{
    /**
     * @return float perimeter
     */
    public function calculatePerimeter() : float
    {
        return 4*$this->side_length;
    }
}