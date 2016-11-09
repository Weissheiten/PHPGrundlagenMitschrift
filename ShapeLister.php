<?php

namespace Lister;

require_once('src/Interfaces/GeometricInterface.php');
require_once('src/HelperClasses/Shape.php');
require_once('src/Shapes/Square.php');
require_once('src/Shapes/Triangle.php');

use \HTL3R\GeoShapes\Interfaces\GeometricInterface as GeometricInterface;
use \HTL3R\GeoShapes\Shapes\Square as Square;
use \HTL3R\GeoShapes\Shapes\Triangle as Triangle;

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
            /* @var $geoForm GeometricInterface; */
            echo $geoForm->calculatePerimeter()." | ";
        }
    }
}

ShapeLister::listShapes();
