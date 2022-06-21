<?php

namespace Nemundo\Admin\Com\Navbar;

use Nemundo\Com\Utility\UniqueComName;
use Nemundo\Html\Block\Div;
use Nemundo\Package\FontAwesome\FontAwesomeIcon;
use Nemundo\Web\Site\AbstractSite;

class AdminNavbarDropdown extends Div
{


    public $dropdownLabel;


    private $dropdown;


    private $submenuContent;


    protected function loadContainer()
    {
        parent::loadContainer();

        $this->dropdown = new AdminNavbarSubmenuDropdownHyperlink($this);
        $this->dropdown->addCssClass('admin-navbar-dropdown-link');
        $this->submenuContent = new Div($this);

    }


    public function getContent()
    {

        $this->dropdown->content = $this->dropdownLabel.' ';

        $dropdownId = 'dropone-' . (new UniqueComName())->getUniqueName();

        $this->dropdown->addAttribute('onclick', 'hideNavbarDropdownMenu(); document.getElementById(\'' . $dropdownId . '\').classList.toggle(\'admin-dropdown-show\');');

        $this->submenuContent->id = $dropdownId;
        $this->submenuContent->addCssClass('admin-navbar-submenu-content');

        $icon = new FontAwesomeIcon($this->dropdown);
        $icon->icon='chevron-down';

            //<i class="fa-solid fa-chevron-down"></i>


        return parent::getContent();

    }


    public function addSubsite(AbstractSite $site)
    {

        $hyperlink = new AdminSubmenuSiteHyperlink($this->submenuContent);
        $hyperlink->site = $site;

    }


}