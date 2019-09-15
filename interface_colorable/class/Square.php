<?php
/**
 * Created by PhpStorm.
 * User: dungduong
 * Date: 11/21/18
 * Time: 17:16
 */
include_once ('Rectangle.php');

class Square extends Rectangle implements Colorable
{

    public function colorable()
    {
        return "Color all four sides";
    }

    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width, $width);
    }
}