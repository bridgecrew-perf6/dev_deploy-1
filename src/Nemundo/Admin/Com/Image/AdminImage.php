<?php


namespace Nemundo\Admin\Com\Image;


use Nemundo\Html\Image\Img;

class AdminImage extends Img
{


    public function getContent()
    {

        //$this->addCssClass('nemundo-image');
        $this->addCssClass('responsive-image');

        return parent::getContent();

    }

}