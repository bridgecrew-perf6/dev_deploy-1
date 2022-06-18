<?php


namespace Nemundo\Admin\Com\Layout;


use Nemundo\Html\Block\Div;


// AdminRowFlexboxLayout
class AdminTwoColumnGridLayout extends Div
{

    public function getContent()
    {
        $this->addCssClass('admin-two-column-grid-layout');
        return parent::getContent();
    }

}