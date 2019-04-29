<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29.04.2019
 * Time: 8:34
 */

namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\Size;

class Small implements Size
{
    public function getSize()
    {
        return "Small";
    }
}