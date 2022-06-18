<?php

namespace Nemundo\Admin\Com\Image;

use Nemundo\Html\Image\Img;

class AdminImage extends Img
{

    public function getContent()
    {

        $this->addCssClass('admin-image');
        return parent::getContent();

    }

}