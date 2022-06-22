<?php

namespace Dev\Page;

use Dev\Com\JavaScript\DevModuleJavaScript;
use Nemundo\Admin\Com\Autocomplete\AdminAutocompleteSearchTextBox;
use Nemundo\Admin\Com\ListBox\AdminListBox;
use Nemundo\Admin\Com\ListBox\AdminSearchTextBox;
use Nemundo\Admin\Com\ListBox\AdminTextBox;
use Nemundo\Admin\Com\Title\AdminTitle;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Package\Bootstrap\Autocomplete\BootstrapAutocompleteTextBox;


class TestPage extends AbstractTemplateDocument
{

    public function getContent()
    {


        //new BootstrapAutocompleteTextBox()



        /*$search = new AdminAutocompleteSearchTextBox($this);
        //$search->id='search-one';
        $search->name= 'search-one';
        $search->webService='irgendwas';*/


       // new AdminTextBox()

        //new AdminListBox()



        //new DevModuleJavaScript($this);




        return parent::getContent();

    }

}