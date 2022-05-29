<?php

namespace Dev\Page;

use Nemundo\Admin\Com\Table\AdminLabelValueTable;
use Nemundo\Com\Html\Header\LibraryHeader;
use Nemundo\Com\Package\PackageTrait;
use Nemundo\Com\Template\AbstractTemplateHtmlDocument;
use Nemundo\Db\Sql\Field\CountField;
use Nemundo\Html\Header\Meta\Meta;
use Nemundo\Html\Heading\H1;
use Parlament\Com\Container\KommissionListContainer;
use Parlament\Com\Container\RatsmitgliedListContainer;
use Parlament\Data\Ratsmitglied\RatsmitgliedReader;

class TestPage extends AbstractTemplateHtmlDocument
{


    public function getContent()
    {


        $meta = new Meta($this);
        $meta->addAttribute('name', 'viewport');
        $meta->addAttribute('content', 'width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no');



        return parent::getContent();

    }
}