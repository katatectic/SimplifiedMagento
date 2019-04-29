<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29.04.2019
 * Time: 8:33
 */

namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\Color;

class Red implements Color
{
    public function getColor()
    {
        return "Red";
    }
}