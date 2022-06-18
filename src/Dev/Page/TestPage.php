<?php

namespace Dev\Page;

use Dev\Controller\DevController;
use Nemundo\Admin\Com\Navbar\AdminMenuNavbar;
use Nemundo\Admin\Com\Navbar\AdminNavbar;
use Nemundo\Admin\Template\AdminTemplate;
use Nemundo\Html\Document\HtmlDocument;


class TestPage extends AdminTemplate
{

    public function getContent()
    {


        $navbar =new AdminNavbar($this);  // = new AdminMenuNavbar($this);  // new AdminNavbar($this);
        $navbar->site = new DevController();


        return parent::getContent();

    }

}