<?php
require_once 'ShapeFactory.php';
require_once 'Shape.php';
require_once 'Square.php';
require_once 'Circle.php';
require_once 'Rectangle.php';

$shapeFactory = new ShapeFactory();

$circle = $shapeFactory->getShape('CIRCLE');
$circle->draw();

$square = $shapeFactory->getShape('SQUARE');
$square->draw();

$rectangle = $shapeFactory->getShape('RECTANGLE');
$rectangle->draw();