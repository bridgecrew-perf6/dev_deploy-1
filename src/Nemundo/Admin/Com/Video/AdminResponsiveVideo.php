<?php

namespace Nemundo\Admin\Com\Video;

use Nemundo\Html\Block\Div;


// AdminResponsiveEmbedded
// AdminEmbedded
class AdminResponsiveVideo extends Div
{

    public function getContent()
    {

        $this->addCssClass('admin-embedded-video');
        return parent::getContent();

    }

}