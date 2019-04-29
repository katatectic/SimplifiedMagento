<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29.04.2019
 * Time: 8:36
 */

namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\Size;

class Normal implements Size
{

    public function getSize()
    {
        return "Normal";
    }
}