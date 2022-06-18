<?php


namespace Nemundo\Admin\Com\Layout;


use Nemundo\Html\Block\Div;

class AdminCenterLayout extends Div
{

    public function getContent()
    {
        $this->addCssClass('admin-center-layout');
        return parent::getContent();
    }

}