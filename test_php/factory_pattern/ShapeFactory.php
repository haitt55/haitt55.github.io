<?php

class ShapeFactory
{
    function getShape($shapeType = '')
    {
        switch ($shapeType) {
            case 'CIRCLE':
                return new Circle();
                break;
            case 'SQUARE':
                return new Square();
                break;
            case 'RECTANGLE':
                return new Rectangle();
                break;
            default:
                return null;
                break;
        }
    }
}