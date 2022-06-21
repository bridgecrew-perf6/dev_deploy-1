<?php

namespace Parlament\Com\Table;

use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTable;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTableRow;
use Parlament\Data\Abstimmung\AbstimmungPaginationReader;
use Parlament\Data\AbstimmungRatsmitglied\AbstimmungRatsmitgliedPaginationReader;
use Parlament\Data\Geschaeft\GeschaeftPaginationReader;

class AbstimmungRatsmitgliedTable extends BootstrapClickableTable
{


    public function getContent()
    {

        //$table=new BootstrapClickableTable($this);


        $header=new TableHeader($this);
        $header->addText('Abstimmung');
        $header->addText('Ratsmitglied');
        $header->addText('Entscheidung');


        $reader= new AbstimmungRatsmitgliedPaginationReader();
        $reader->model->loadAbstimmung();
        $reader->model->loadRatsmitglied();
        $reader->model->loadEntscheidung();
        //$reader->addOrder($reader->model->datum,SortOrder::DESCENDING);

        $reader->paginationLimit=500;

        foreach ($reader->getData() as $geschaeftRow) {

            $row=new BootstrapClickableTableRow($this);
            $row->addText($geschaeftRow->abstimmung->abstimmung);
            $row->addText($geschaeftRow->ratsmitgliedId);
            $row->addText($geschaeftRow->ratsmitglied->name.' '.$geschaeftRow->ratsmitglied->vorname);
            $row->addText($geschaeftRow->entscheidung->entscheidung);

        }

        return parent::getContent();

    }


}