<?php

namespace Parlament\Com\Table;

use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTable;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTableRow;
use Parlament\Filter\GeschaeftFilterTrait;
use Parlament\Reader\AbstimmungDataReader;

class AbstimmungTable extends BootstrapClickableTable
{

    use GeschaeftFilterTrait;


    public function getContent()
    {

        $header = new TableHeader($this);
        $header->addText('Datum');
        $header->addText('Zeit');
        $header->addText('Geschäft');
        $header->addText('Typ');
        $header->addText('Status');
        $header->addText('Abstimmung');
        $header->addText('Ja');
        $header->addEmpty();
        $header->addText('Nein');
        $header->addEmpty();
        $header->addText('Enthaltung');


        $reader = new AbstimmungDataReader();
        $reader->sessionId = $this->sessionId;
        $reader->geschaeftstypId = $this->geschaeftstypId;
        $reader->geschaeftsstatusId = $this->geschaeftsstatusId;


        foreach ($reader->getData() as $abstimmungRow) {

            $row = new BootstrapClickableTableRow($this);
            $row->addText($abstimmungRow->datum->getShortDateLeadingZeroFormat());
            $row->addText($abstimmungRow->zeit->getTimeLeadingZero());

            $hyperlink = new SiteHyperlink($row);
            $hyperlink->site = $abstimmungRow->geschaeft->getSite();

            $row->addText($abstimmungRow->geschaeft->geschaeftstyp->geschaeftstyp);
            $row->addText($abstimmungRow->geschaeft->geschaeftsstatus->geschaeftsstatus);

            $hyperlink = new SiteHyperlink($row);
            $hyperlink->site = $abstimmungRow->getSite();

            $row->addText($abstimmungRow->jaBedeutung);
            $row->addText($abstimmungRow->ja);

            $row->addText($abstimmungRow->neinBedeutung);
            $row->addText($abstimmungRow->nein);

            $row->addText($abstimmungRow->enthaltung);

            //$row->addClickableUrl($abstimmungRow->getJsonUrl());


        }

        return parent::getContent();

    }


}