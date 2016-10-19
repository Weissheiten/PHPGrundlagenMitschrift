<?php
/**
 * Created by PhpStorm.
 * User: FloLeBlanc
 * Date: 19.10.2016
 * Time: 15:58
 */

namespace PHPGrundlagen\HelperClasses;

class Shape
{
    /* @var int $side_lenght */
    protected $side_length;

    /* @var string $color */
    protected $color;

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
}