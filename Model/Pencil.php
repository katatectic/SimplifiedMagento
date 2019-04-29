<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 29.04.2019
 * Time: 8:22
 */

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\Size;

class Pencil implements PencilInterface
{
    protected $color;
    protected $size;

    public function __construct(Color $color, Size $size)
    {
        $this->color = $color;
        $this->size = $size;
    }

    public function getPencilType()
    {
        return "Our pencil has $this->color->getColor() color and $this->size->getSize() size";
    }
}