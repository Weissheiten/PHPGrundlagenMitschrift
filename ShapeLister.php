<?php

namespace Lister;

require_once('Interfaces/GeometricInterface.php');
require_once('HelperClasses/Shape.php');
require_once('Shapes/Square.php');
require_once('Shapes/Triangle.php');

use \PHPGrundlagen\Interfaces\GeometricInterface as GeometricInterface;
use \PHPGrundlagen\Shapes\Square as Square;
use \PHPGrundlagen\Shapes\Triangle as Triangle;

class ShapeLister
{
    public static function listShapes()
    {
        $geoForms = array(
            new Square(4, "0FF"),
            new Square(3, "F0F"),
            new Triangle(2, "FFF"),
            new Triangle(3, "F0F")
        );

        foreach ($geoForms as $geoForm) {
            /* @var $geoForm \Interfaces\GeometricInterface; */
            echo $geoForm->calculatePerimeter()." | ";
        }
    }
}

ShapeLister::listShapes();
