<?php

namespace Parlament\Page;

use Nemundo\Admin\Template\AdminTemplate;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTable;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTableRow;
use Nemundo\Package\Bootstrap\Table\BootstrapTable;
use Parlament\Com\Table\AbstimmungTable;
use Parlament\Data\Geschaeft\GeschaeftPaginationReader;

class ParlamentPage extends AdminTemplate
{
    public function getContent()
    {


        //$table=new AbstimmungTable($this);






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