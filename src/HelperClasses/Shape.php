<?php
/**
 * Created by PhpStorm.
 * User: FloLeBlanc
 * Date: 19.10.2016
 * Time: 15:58
 */

namespace HTL3R\GeoShapes\HelperClasses;

abstract class Shape
{
    /* @var string $shapeName */
    protected $shapeName;

    /* @var int $side_lenght */
    protected $side_length;

    /* @var string $color */
    protected $color;

    /**
     * @return mixed
     */
    public function getShapeName()
    {
        return $this->shapeName;
    }

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
    public function __construct(int $side_length, string $color, string $shapename)
    {
        $this->shapeName = $shapename;
        $this->side_length = $side_length;
        $this->color = $color;
    }

    /**
     * @return string perimeter and color of the form
     */
    public function outputInfo() : string
    {
        return sprintf(
            "Es gibt ein %s mit Umfang %d cm und der Farbe %s\n",
            $this->getShapeName(),
            $this->calculatePerimeter(),
            $this->getColor()
        );
    }

}