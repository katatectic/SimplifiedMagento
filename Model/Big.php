<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29.04.2019
 * Time: 8:35
 */

namespace SimplifiedMagento\FirstModule\Model;
use SimplifiedMagento\FirstModule\Api\Size;

class Big implements Size
{

    public function getSize()
    {
        return "Big";
    }
}