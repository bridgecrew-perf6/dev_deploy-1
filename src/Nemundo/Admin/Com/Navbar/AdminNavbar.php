<?php

namespace Nemundo\Admin\Com\Navbar;

use Nemundo\App\UserAction\Site\LogoutSite;
use Nemundo\Com\Container\LibraryTrait;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\JavaScript\Module\ModuleJavaScript;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Formatting\Bold;
use Nemundo\Html\Hyperlink\Hyperlink;
use Nemundo\Html\Image\Img;
use Nemundo\Html\Layout\Nav;
use Nemundo\User\Session\UserSession;
use Nemundo\Web\Site\AbstractSite;

class AdminNavbar extends Nav
{

    use LibraryTrait;

    /**
     * @var AbstractSite
     */
    public $site;

    public $logoImage;

    public $logoText;

    /**
     * @var bool
     */
    public $fixed = false;


    public function getContent()
    {

        $this->addJsUrl('/js/framework/Admin/Dropdown/dropdown.js');

        $module = new ModuleJavaScript($this);
        $module->src = '/js/framework/Admin/Navbar/Navbar.js';

        $this->addCssClass('admin-navbar');

        if ($this->fixed) {
            $this->addCssClass('admin-navbar-fixed');
        }

        $left = new Div($this);
        $left->addCssClass('admin-navbar-left');

        if ($this->logoImage !== null) {

            $hyperlink = new Hyperlink($left);
            $hyperlink->href = '/';

            $logo = new Img($hyperlink);
            $logo->addCssClass('admin-navbar-logo');
            $logo->src = $this->logoImage;

        } else {

            if ($this->logoText !== null) {

                $hyperlink = new Hyperlink($left);
                $hyperlink->addCssClass('admin-navbar-brand');
                $hyperlink->href = '/';
                $hyperlink->content = $this->logoText;

            }

        }


        $menu = new Div($left);
        $menu->id = "admin-navbar-menu";
        $menu->addCssClass('admin-navbar-menu');


        new CloseMenu($menu);

        foreach ($this->site->getMenuActiveSite() as $site) {

            if ($site->hasMenuActiveItems()) {

                $submenu = new AdminNavbarDropdown($menu);
                $submenu->dropdownLabel = $site->title;

                foreach ($site->getMenuActiveSite() as $subSite) {
                    if ($subSite->menuActive) {
                        $submenu->addSubsite($subSite);

                    }
                }

            } else {

                $hyperlink = new SiteHyperlink($menu);
                $hyperlink->addCssClass('admin-navbar-link');
                $hyperlink->site = $site;

            }

            if ($site->isCurrentSite()) {
                $hyperlink->addCssClass('admin-navbar-link-active');
            }

        }


        if ((new UserSession())->isUserLogged()) {

            $bold = new Bold();
            $bold->addCssClass('admin-navbar-user');
            $bold->content = ' ' . (new UserSession())->displayName;

            $userMenu = new AdminNavbarDropdown($menu);
            $userMenu->dropdownLabel = $bold->getBodyContent();
            $userMenu->addSubsite(LogoutSite::$site);

        }

        new HamburgerMenu($this);

        return parent::getContent();

    }

}