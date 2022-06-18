<?php

namespace Nemundo\Admin\Template;

use Nemundo\Admin\AdminConfig;
use Nemundo\Admin\Com\Navbar\AdminNavbar;
use Nemundo\Com\Template\AbstractResponsiveHtmlDocument;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Container\AbstractContainer;
use Nemundo\Package\FontAwesome\FontAwesomePackage;

class AdminTemplate extends AbstractResponsiveHtmlDocument
{

    /**
     * @var Div
     */
    private $content;

    /**
     * @var AdminNavbar
     */
    protected $navbar;


    protected function loadContainer()
    {

        parent::loadContainer();

        $this->addCssUrl(AdminConfig::$defaultStylesheet);
        $this->addPackage(new FontAwesomePackage());

        $this->content = new Div();
        $this->content->id = 'main-content';

        parent::addContainer($this->content);

    }


    public function addContainer(AbstractContainer $container)
    {

        $this->content->addContainer($container);

    }

}