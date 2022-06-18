<?php

namespace Nemundo\Admin\Com\Navbar;

use Nemundo\Admin\Com\Button\AdminButton;
use Nemundo\Admin\Com\Dropdown\AdminDropdown;
use Nemundo\Admin\Com\Icon\AdminIcon;
use Nemundo\App\UserAction\Site\LogoutSite;
use Nemundo\Com\Container\LibraryTrait;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\Html\Listing\UnorderedList;
use Nemundo\Com\JavaScript\Module\ModuleJavaScript;
use Nemundo\Com\Utility\UniqueComName;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Formatting\Bold;
use Nemundo\Html\Hyperlink\Hyperlink;
use Nemundo\Html\Image\Img;
use Nemundo\Html\Layout\Nav;
use Nemundo\Html\Listing\Li;
use Nemundo\Html\Listing\Ul;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Package\Bootstrap\BootstrapConfig;
use Nemundo\Package\Bootstrap\Navbar\BootstrapSiteNavbar;
use Nemundo\Package\FontAwesome\FontAwesomeIcon;
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

        $module = new ModuleJavaScript($this);
        $module->src = '/js/framework/Admin/Navbar/Navbar.js';

        $this->addJsUrl('/js/framework/Admin/Dropdown/dropdown.js');

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
        $menu->addCssClass('admin-navbar-menu');

        $close = new FontAwesomeIcon($menu);
        $close->id = 'admin-navbar-close';
        $close->addCssClass('admin-navbar-close');
        $close->icon = 'xmark';


        foreach ($this->site->getMenuActiveSite() as $site) {

            if ($site->hasItems()) {

                /*$hyperlink = new SiteHyperlink($menu);
                $hyperlink->addCssClass('admin-navbar-link');
                $hyperlink->site = $site;*/

                $submenu =new Div($menu);

                $dropdown =new Hyperlink($submenu);  // SiteHyperlink($menu);
                $dropdown->content=$site->title;  //.' '.$icon->getBodyContent();
                $dropdown->addCssClass('admin-navbar-menu');
                $dropdown->addCssClass('admin-navbar-link');
                $dropdown->addCssClass('admin-dropdown-button');




                //$submenu->content->addCssClass('admin-navbar-submenu');

                $icon=new AdminIcon($dropdown);
                $icon->addCssClass('admin-navbar-submenu-icon');
                $icon->icon='caret-down';


                //admin-dropdown-show
                $dropdownId = 'dropone-' . (new UniqueComName())->getUniqueName();

                /*$this->button = new AdminButton();
                $this->button->label = 'Click';
                $this->button->addCssClass('admin-dropdown-button');*/
                $dropdown->addAttribute('onclick', 'hideDropdownMenu(); document.getElementById(\'' . $dropdownId . '\').classList.toggle(\'admin-dropdown-show\');');
                //parent::addContainer($this->button);

                $submenuContent = new Div($submenu);
                $submenuContent->id = $dropdownId;
                $submenuContent->addCssClass('admin-dropdown-content');
                $submenuContent->addCssClass('admin-navbar-submenu-content');
                //parent::addContainer($this->content);




                //$submenu = new Div($menu);
                //$submenu->addCssClass('admin-navbar-submenu');

                /*$p=new Paragraph($submenu);
                $p->content= 'Submenu: '.$site->title;*/


                //$menuActive = false;
                foreach ($site->getMenuActiveSite() as $subSite) {
                    if ($subSite->menuActive) {
                        //$menuActive = true;

                        $hyperlink = new SiteHyperlink($submenuContent);
                        $hyperlink->addCssClass('admin-navbar-link');
                        $hyperlink->addCssClass('admin-navbar-submenu-link');
                        $hyperlink->site = $subSite;

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