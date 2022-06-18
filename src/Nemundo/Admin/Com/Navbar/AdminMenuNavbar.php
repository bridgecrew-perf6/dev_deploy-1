<?php

namespace Nemundo\Admin\Com\Navbar;

use Nemundo\Admin\Com\Icon\AdminIcon;
use Nemundo\App\UserAction\Site\LogoutSite;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\Utility\UniqueComName;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Formatting\Bold;
use Nemundo\Html\Hyperlink\Hyperlink;
use Nemundo\Package\FontAwesome\FontAwesomeIcon;
use Nemundo\User\Session\UserSession;
use Nemundo\Web\Site\AbstractSite;

class AdminMenuNavbar extends Div
{

    /**
     * @var AbstractSite
     */
    public $site;

    public function getContent()
    {

        //$menu = new Div($this);
        $this->id = "admin-navbar-menu";
        $this->addCssClass('admin-navbar-menu');

        $close = new FontAwesomeIcon($this);
        $close->id = 'admin-navbar-close';
        $close->addCssClass('admin-navbar-close');
        $close->icon = 'xmark';


        foreach ($this->site->getMenuActiveSite() as $site) {

            if ($site->hasItems()) {

                /*$hyperlink = new SiteHyperlink($menu);
                $hyperlink->addCssClass('admin-navbar-link');
                $hyperlink->site = $site;*/

                $submenu =new Div($this);



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
                /*$submenuContent->addCssClass('admin-dropdown-content');*/
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

                $hyperlink = new SiteHyperlink($this);
                $hyperlink->addCssClass('admin-navbar-link');
                $hyperlink->site = $site;

            }

            if ($site->isCurrentSite()) {
                $hyperlink->addCssClass('admin-navbar-link-active');
            }


        }


        $hyperlink = new Hyperlink($this);   // new SiteHyperlink($menu);
        $hyperlink->addCssClass('admin-navbar-link');
        //$hyperlink->site = $site;

        $icon = new FontAwesomeIcon($hyperlink);
        $icon->icon = 'user';

        $bold = new Bold($hyperlink);
        $bold->content = ' ' . (new UserSession())->displayName;


        $hyperlink = new SiteHyperlink($this);
        $hyperlink->addCssClass('admin-navbar-link');
        $hyperlink->site = LogoutSite::$site;



        return parent::getContent(); // TODO: Change the autogenerated stub
    }

}