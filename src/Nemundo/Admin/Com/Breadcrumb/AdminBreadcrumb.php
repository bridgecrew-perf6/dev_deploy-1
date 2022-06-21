<?php

namespace Nemundo\Admin\Com\Breadcrumb;

use Nemundo\Admin\Com\ListGroup\AdminListGroupSiteHyperlink;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\Html\Listing\UnorderedList;
use Nemundo\Html\Block\Div;
use Nemundo\Web\Site\AbstractSite;

class AdminBreadcrumb extends UnorderedList
{

    public function getContent()
    {

        $this->addCssClass('admin-breadcrumb');
        return parent::getContent();

    }


    public function addSite(AbstractSite $site) {

        $hyperlink=new SiteHyperlink($this);
        $hyperlink->site=$site;

        return $this;

    }


}