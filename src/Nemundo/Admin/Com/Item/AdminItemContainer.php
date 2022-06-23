<?php

namespace Nemundo\Admin\Com\Item;

use Nemundo\Html\Block\ContentDiv;

class AdminItemContainer extends ContentDiv
{

    public function getContent()
    {

        $this->addCssClass('admin-item-container');
        return parent::getContent();

    }

}