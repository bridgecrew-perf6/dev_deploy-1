<?php

namespace Nemundo\Admin\Template;

use Nemundo\Admin\AdminConfig;
use Nemundo\Admin\Com\Navbar\AdminSiteNavbar;
use Nemundo\Admin\Template\BootstrapAdminTemplate;
use Nemundo\App\Manifest\Com\JavaScript\WebManifestJavaScript;
use Nemundo\App\Manifest\Com\Link\WebManifestLink;
use Nemundo\Com\Html\Header\LibraryHeader;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\JavaScript\Module\ModuleJavaScript;
use Nemundo\Com\Template\AbstractResponsiveHtmlDocument;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Container\AbstractContainer;
use Nemundo\Html\Layout\Nav;
use Nemundo\Html\Script\JavaScript;
use Nemundo\Html\Script\JavaScriptType;
use Nemundo\Package\Bootstrap\Document\BootstrapDocument;
use Nemundo\Package\Bootstrap\Layout\Container\BootstrapContainer;
use Nemundo\Package\Bootstrap\Navbar\BootstrapSiteNavbar;
use Nemundo\Package\Bootstrap\Package\BootstrapPackage;
use Nemundo\Package\BootstrapIcon\Package\BootstrapIconPackage;
use Nemundo\Package\FontAwesome\FontAwesomeIcon;
use Nemundo\Package\FontAwesome\FontAwesomePackage;
use Nemundo\Package\Jquery\Container\JqueryHeader;
use Nemundo\Package\Jquery\Package\JqueryPackage;
use Nemundo\Package\OpenGraph\OpenGraph;
use Nemundo\Package\TwitterCard\TwitterCard;
use Nemundo\Web\WebConfig;


// AdminTemplate
// BootstrapAdminTemplate
class AdminTemplate extends AbstractResponsiveHtmlDocument
{


    /**
     * @var Div
     */
    private $content;

    /**
     * @var BootstrapSiteNavbar
     */
    protected $navbar;


    protected function loadContainer()
    {

        parent::loadContainer();


        //$this->addJsUrl('/js/dev/mobilemenu.js');

        $module=new ModuleJavaScript();
        $module->src= '/js/dev/mobilemenu.js';


        $this->addPackage(new FontAwesomePackage());

        //$this->addCssUrl('/css/dev/mobilemenu.css');
        //$this->addCssUrl('/css/dev/style.css');

        $nav = new Nav();  // new AdminSiteNavbar($this);
        $nav->addCssClass('nav');


        $menuContent = new Div($nav);
        $menuContent->id = 'menu-content';

        $close=new FontAwesomeIcon($menuContent);
        $close->id='menu-close';
        $close->icon='xmark';


        foreach (AdminConfig::$webController->getMenuActiveSite() as $site) {

            $hyperlink=new SiteHyperlink($menuContent);
            $hyperlink->site=$site;
            $hyperlink->addCssClass('nav-item');

        }


        $icon = new FontAwesomeIcon($nav);
        $icon->icon = 'bars';
        $icon->id='hamburger';
        $icon->addCssClass('mobilemenu');

        $this->content = new Div();
        //$this->content->addCssClass('main-content');
        $this->content->id='main-content';

        parent::addContainer($module);
        parent::addContainer($nav);
        parent::addContainer($this->content);

    }


    public function addContainer(AbstractContainer $container)
    {

        $this->content->addContainer($container);

    }

}