<?php

namespace Nemundo\Admin\Template;

use Nemundo\Admin\AdminConfig;
use Nemundo\Admin\Com\Navbar\AdminNavbar;
use Nemundo\Com\Template\AbstractResponsiveHtmlDocument;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Container\AbstractContainer;
use Nemundo\Package\FontAwesome\FontAwesomePackage;


// NavbarAdminTemplate
class NavbarAdminTemplate extends AbstractResponsiveHtmlDocument
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

        if (AdminConfig::$defaultStylesheet !== null) {
            $this->addCssUrl(AdminConfig::$defaultStylesheet);
        }

        $this->addPackage(new FontAwesomePackage());

        $nav = new AdminNavbar();
        $nav->logoText = AdminConfig::$logoText;
        $nav->logoImage = AdminConfig::$logoUrl;
        $nav->site = AdminConfig::$webController;

        $this->content = new Div();
        $this->content->id = 'main-content';

        parent::addContainer($nav);
        parent::addContainer($this->content);

    }


    public function addContainer(AbstractContainer $container)
    {

        $this->content->addContainer($container);

    }

}