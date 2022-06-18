<?php

namespace Nemundo\Admin\Com\Navbar;

use Nemundo\App\UserAction\Site\LogoutSite;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\JavaScript\Module\ModuleJavaScript;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Formatting\Bold;
use Nemundo\Html\Hyperlink\Hyperlink;
use Nemundo\Html\Image\Img;
use Nemundo\Html\Layout\Nav;
use Nemundo\Package\Bootstrap\Navbar\BootstrapNavbar;
use Nemundo\Package\Bootstrap\Navbar\BootstrapSiteNavbar;
use Nemundo\Package\FontAwesome\FontAwesomeIcon;
use Nemundo\User\Session\UserSession;
use Nemundo\Web\Site\AbstractSite;

class AdminNavbar extends Nav
{

    /**
     * @var AbstractSite
     */
    public $site;

    public $logoImage;

    public $logoText;

    /**
     * @var bool
     */
    public $fixed=false;


    public function getContent()
    {

        $module = new ModuleJavaScript($this);
        $module->src = '/js/framework/Admin/Navbar/Navbar.js';

        $this->addCssClass('admin-navbar');

        if ($this->fixed) {
            $this->addCssClass('admin-navbar-fixed');
        }

        if ($this->logoImage !== null) {

            $hyperlink = new Hyperlink($this);
            $hyperlink->href = '/';

            $logo = new Img($hyperlink);
            $logo->addCssClass('admin-navbar-logo');
            $logo->src = $this->logoImage;

        } else {


        if ($this->logoText !== null) {

            $hyperlink = new Hyperlink($this);
            $hyperlink->addCssClass('admin-navbar-brand');
            $hyperlink->href = '/';
            $hyperlink->content = $this->logoText;

            /*$brand=new Span($hyperlink);
            $brand->addCssClass('admin-navbar-brand');
            $brand->content=$this->logoText;*/

        }

        }


        $menu = new Div($this);
        $menu->id = "admin-navbar-menu";
        $menu->addCssClass("admin-navbar-menu");

        $close = new FontAwesomeIcon($menu);
        $close->id = 'admin-navbar-close';
        $close->addCssClass('admin-navbar-close');
        $close->icon = 'xmark';


        foreach ($this->site->getMenuActiveSite() as $site) {

            $hyperlink = new SiteHyperlink($menu);
            $hyperlink->addCssClass('admin-navbar-link');
            $hyperlink->site = $site;

            if ($site->isCurrentSite()) {
                $hyperlink->addCssClass('admin-navbar-link-active');
            }

        }


        $hyperlink = new Hyperlink($menu);   // new SiteHyperlink($menu);
        $hyperlink->addCssClass('admin-navbar-link');
        //$hyperlink->site = $site;

        $icon = new FontAwesomeIcon($hyperlink);
        $icon->icon = 'user';

        $bold = new Bold($hyperlink);
        $bold->content = ' ' . (new UserSession())->displayName;


        $hyperlink = new SiteHyperlink($menu);
        $hyperlink->addCssClass('admin-navbar-link');
        $hyperlink->site = LogoutSite::$site;


        //new BootstrapSiteNavbar()Navbar()



        //if ((new UserSession())->isUserLogged()) {




        $close = new FontAwesomeIcon($this);
        $close->id = 'admin-navbar-hamburger';
        $close->addCssClass('admin-navbar-hamburger');
        $close->icon = 'bars';

        return parent::getContent();

    }

}