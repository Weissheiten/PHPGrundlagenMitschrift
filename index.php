<?php
/**
 * Created by PhpStorm.
 * User: FloLeBlanc
 * Date: 19.10.2016
 * Time: 13:59
 */

namespace PHPGrundlagen\GeometricForms;

/**
 * Class Triangle
 *
 * represents a triangle
 */
class Triangle
{
    public $side_length;
    public $color;

    /**
     * Triangle constructor.
     * @param int $side_length
     * @param string $color
     */
    public function __construct(int $side_length, string $color)
    {
        $this->side_length = $side_length;
        $this->color = $color;
    }

    /**
     * @return float perimeter
     */
    public function calculatePerimeter() : float
    {
        return 3*$this->side_length;
    }
}

$green = "#00FF00";
$red = "#FF0000";
$blue = "#0000FF";

$triangle1 = new Triangle(4, $green);
$triangle2 = new Triangle(2, $blue);

echo sprintf("Es gibt ein Dreieck mit Umfang %d cm und der Farbe %s\n",
    $triangle1->calculatePerimeter(),
    $triangle1->color
);
echo "Es gibt ein Quadrat mit Umfang ".(4*3)." cm und der Farbe grün.\n ";
echo "Es gibt ein Dreieck mit Umfang ".(3*2)." cm und der Farbe blau.\n ";
echo "Es gibt ein Dreieck mit Umfang ".(3*3)." cm und der Farbe rot.\n ";
echo "Es gibt ein Quadrat mit Umfang ".(4*5)." cm und der Farbe rot.\n ";


