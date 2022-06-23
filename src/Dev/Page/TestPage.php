<?php

namespace Dev\Page;

use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Srf\Com\JavaScript\SrfExplorerModuleJavaScript;


class TestPage extends AbstractTemplateDocument
{

    public function getContent()
    {


        new SrfExplorerModuleJavaScript($this);


        return parent::getContent();

    }

}