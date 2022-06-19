<?php

namespace Nemundo\Admin\Com\Navbar;

use Nemundo\Html\Block\Div;
use Nemundo\Package\FontAwesome\FontAwesomeIcon;

class HamburgerMenu extends Div
{

    public function getContent()
    {

        $this->addCssClass('admin-navbar-hamburger');

        $icon = new FontAwesomeIcon($this);
        $icon->id = 'admin-navbar-hamburger';
        //$icon->addCssClass('admin-navbar-hamburger');
        $icon->icon = 'bars';



        return parent::getContent(); // TODO: Change the autogenerated stub
    }

}