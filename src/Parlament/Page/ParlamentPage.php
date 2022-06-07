<?php

namespace Parlament\Page;

use Nemundo\Admin\Template\BootstrapAdminTemplate;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Heading\H1;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTable;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTableRow;
use Nemundo\Package\Bootstrap\Table\BootstrapTable;
use Parlament\Com\Container\RatsmitgliedListContainer;
use Parlament\Com\Container\SessionAbstimmungContainer;
use Parlament\Com\Table\AbstimmungTable;
use Parlament\Data\Geschaeft\GeschaeftPaginationReader;

class ParlamentPage extends AbstractTemplateDocument  //  AdminTemplate
{
    public function getContent()
    {

        $container = new SessionAbstimmungContainer($this);


        //$table=new AbstimmungTable($this);



        /*$h1=new H1($this);
        $h1->content='Parlament';*/


        //new RatsmitgliedListContainer($this);


        /*
        $table=new BootstrapClickableTable($this);

        $reader=new GeschaeftPaginationReader();
        $reader->model->loadGeschaeftstyp();

        foreach ($reader->getData() as $geschaeftRow) {

            $row=new BootstrapClickableTableRow($table);
            $row->addText($geschaeftRow->geschaeft);
            $row->addText($geschaeftRow->geschaeftstyp->geschaeftstyp);

        }*/

        return parent::getContent();

    }

}