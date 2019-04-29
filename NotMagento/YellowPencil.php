<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 23.04.2019
 * Time: 20:45
 */

namespace SimplifiedMagento\FirstModule\NotMagento;


class YellowPencil implements PencilInterface
{
    public function getPencilType()
    {
        return "Yellow pencil";
    }
}