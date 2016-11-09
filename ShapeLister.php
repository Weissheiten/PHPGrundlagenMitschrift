<?php

namespace Lister;

require_once('HelperClasses/Shape.php');
require_once('Shapes/Square.php');
require_once('Shapes/Triangle.php');

use Interfaces;
use Shapes\Square;
use Shapes\Triangle;

class ShapeLister
{
    public static function listShapes()
    {
        $geoForms = array(
            new \PHPGrundlagen\Shapes\Square(4, "0FF"),
            new \PHPGrundlagen\Shapes\Square(3, "F0F"),
            new \PHPGrundlagen\Shapes\Triangle(2, "FFF"),
            new \PHPGrundlagen\Shapes\Triangle(3, "F0F")
        );

        foreach ($geoForms as $geoForm) {
            /* @var $geoForm \Interfaces\GeometricInterface; */
            echo $geoForm->calculatePerimeter()." | ";
        }
    }
}

ShapeLister::listShapes();
