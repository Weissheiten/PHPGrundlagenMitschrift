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
    /* @var int $side_lenght */
    private $side_length;

    /* @var string $color */
    private $color;

    /**
     * @return string color as hexcode
     */
    public function getColor()
    {
        return $this->color;
    }

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

/**
 * Class Square
 *
 * represents a square
 */
class Square
{
    /* @var int $side_lenght */
    private $side_length;

    /* @var string $color */
    private $color;

    /**
     * @return string color as hexcode
     */
    public function getColor()
    {
        return $this->color;
    }

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
        return 4*$this->side_length;
    }
}

$green = "#00FF00";
$red = "#FF0000";
$blue = "#0000FF";

$triangles = array(
    new Triangle(4, $green),
    new Triangle(2, $blue),
    new Triangle(3, $red)
);

foreach($triangles as $triangle)
{
    /* @var Triangle $triangle */
    echo sprintf(
        "Es gibt ein Dreieck mit Umfang %d cm und der Farbe %s\n",
        $triangle->calculatePerimeter(),
        $triangle->getColor()
    );
}

$squares = array(
    new Square(3, $green),
    new Square(5, $red)
);

foreach($squares as $square){
    /* @var Square $square */
    echo sprintf(
        "Es gibt ein Quadrat mit Umfang %d cm und der Farbe %s\n",
        $square->calculatePerimeter(),
        $square->getColor()
    );
}
