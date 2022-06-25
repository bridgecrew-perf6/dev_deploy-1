<?php

namespace Dev\Template;

use Nemundo\Admin\Template\NavbarAdminTemplate;
use Nemundo\Com\JavaScript\Module\ModuleJavaScript;
use Nemundo\Com\Package\PackageTrait;
use Nemundo\Html\Block\Div;


class DevTemplate extends NavbarAdminTemplate
{

    use PackageTrait;

    public function getContent()
    {

        //$this->pageTitle = 'Dev';


        $this->pageTitle = 'wetzitrail';



        /*
        <link rel="stylesheet" href="/asset/open_layers/ol.css"/>
    <script src="/asset/open_layers/ol.js"></script>
        */

        return parent::getContent();

    }


}