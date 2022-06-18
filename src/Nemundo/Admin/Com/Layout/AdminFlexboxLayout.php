<?php


namespace Nemundo\Admin\Com\Layout;


use Nemundo\Html\Block\Div;


// AdminRowFlexboxLayout
class AdminFlexboxLayout extends Div
{

    public function getContent()
    {
        $this->addCssClass('admin-flexbox-layout');
        return parent::getContent();
    }

}