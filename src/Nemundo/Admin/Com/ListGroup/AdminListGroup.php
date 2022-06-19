<?php

namespace Nemundo\Admin\Com\ListGroup;

use Nemundo\Html\Block\Div;
use Nemundo\Web\Site\AbstractSite;

class AdminListGroup extends Div
{

    public function getContent()
    {

        $this->addCssClass('admin-list-group');
        return parent::getContent();

    }


    public function addSite(AbstractSite $site) {

        $hyperlink=new AdminListGroupSiteHyperlink($this);
        $hyperlink->site=$site;

        return $this;

    }

}