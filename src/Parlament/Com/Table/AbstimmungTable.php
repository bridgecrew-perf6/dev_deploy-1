<?php

namespace Parlament\Com\Table;

use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTable;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTableRow;
use Parlament\Data\Abstimmung\AbstimmungPaginationReader;
use Parlament\Data\Geschaeft\GeschaeftPaginationReader;
use Parlament\Parameter\AbstimmungParameter;
use Parlament\Site\Abstimmung\AbstimmungItemSite;

class AbstimmungTable extends BootstrapClickableTable
{


    public function getContent()
    {

        $header=new TableHeader($this);

        //$header->addText('Rat');
        $header->addText('Datum');
        $header->addText('Zeit');
        $header->addText('Geschäft');
        $header->addText('Typ');
        $header->addText('Abstimmung');
        $header->addText('Datum');
        $header->addText('Ja');
        $header->addText('Nein');
        $header->addText('Enthaltung');


        $reader= new AbstimmungPaginationReader();
        $reader->model->loadGeschaeft();
        $reader->model->geschaeft->loadGeschaeftstyp();
        //$reader->addOrder($reader->model->datum,SortOrder::DESCENDING);
        $reader->addOrder($reader->model->id,SortOrder::DESCENDING);

        foreach ($reader->getData() as $abstimmungRow) {

            $row=new BootstrapClickableTableRow($this);

            //$row->addText($abstimmungRow->ge)


            /*if ($abstimmungRow->datum!==null) {
            $row->addText($abstimmungRow->datum->getShortDateLeadingZeroFormat());
            } else {
                $row->addEmpty();
            }

            if ($abstimmungRow->zeit!==null) {
                $row->addText($abstimmungRow->zeit->getTimeLeadingZero());
            } else {
                $row->addEmpty();
            }*/


            $row->addText($abstimmungRow->datum->getShortDateLeadingZeroFormat());
            $row->addText($abstimmungRow->zeit->getTimeLeadingZero());

            //$row->addText($abstimmungRow->geschaeft->geschaeft);

            $hyperlink=new SiteHyperlink($row);
            $hyperlink->site= $abstimmungRow->geschaeft->getSite();


            $row->addText($abstimmungRow->geschaeft->geschaeftstyp->geschaeftstyp);
            //$row->addText($abstimmungRow->abstimmung);

            $hyperlink=new SiteHyperlink($row);
            $hyperlink->site= $abstimmungRow->getSite();

            $row->addText($abstimmungRow->ja);
            $row->addText($abstimmungRow->nein);
            $row->addText($abstimmungRow->enthaltung);

            //$row->addClickableUrl($abstimmungRow->getJsonUrl());


            //$hyperlink = new



        }

        return parent::getContent();

    }


}