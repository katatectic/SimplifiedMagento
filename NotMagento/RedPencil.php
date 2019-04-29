<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.04.2019
 * Time: 20:45
 */

namespace SimplifiedMagento\FirstModule\NotMagento;


class RedPencil implements PencilInterface
{
    public function getPencilType()
    {
        return "Red pencil";
    }
}