<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29.04.2019
 * Time: 8:37
 */

namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\Color;

class Green implements Color
{

    public function getColor()
    {
        return "Green";
    }
}