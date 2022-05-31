<?php

namespace Parlament\Com\Table;

use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\Html\Listing\UnorderedList;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Html\Hyperlink\Hyperlink;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTable;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTableRow;
use Parlament\Data\Abstimmung\AbstimmungPaginationReader;
use Parlament\Data\Abstimmung\AbstimmungReader;
use Parlament\Data\Geschaeft\GeschaeftPaginationReader;
use Parlament\Data\Geschaeft\GeschaeftReader;

class GeschaeftTable extends BootstrapClickableTable
{


    public function getContent()
    {

        $header=new TableHeader($this);
        $header->addText('Kürzel');
        $header->addText('Geschäft');
        $header->addText('Typ');
        $header->addText('Session');
        $header->addText('Abstimmung');

        $reader= new GeschaeftReader();  // new GeschaeftPaginationReader();
        $reader->model->loadGeschaeftstyp();
        $reader->model->loadSession();

        foreach ($reader->getData() as $geschaeftRow) {

            $row=new BootstrapClickableTableRow($this);
            $row->addText($geschaeftRow->kurzbezeichnung);
            //$row->addText($geschaeftRow->geschaeft);

            $hyperlink=new SiteHyperlink($row);
            $hyperlink->site=$geschaeftRow->getSite();



            $row->addText($geschaeftRow->geschaeftstyp->geschaeftstyp);
            $row->addText($geschaeftRow->session->session);

            $ul = new UnorderedList($row);

            $abstimmungReader=new AbstimmungReader();
            $abstimmungReader->filter->andEqual($abstimmungReader->model->geschaeftId,$geschaeftRow->id);
            foreach ($abstimmungReader->getData() as $abstimmungRow) {
                $ul->addText($abstimmungRow->abstimmung);
            }


            $hyperlink=new Hyperlink($row);
            $hyperlink->content='Detail';
            $hyperlink->href=$geschaeftRow->getUrl();

            $hyperlink=new Hyperlink($row);
            $hyperlink->content='Json';
            $hyperlink->href=$geschaeftRow->getJsonUrl();

            $hyperlink=new Hyperlink($row);
            $hyperlink->content='Vote Json';
            $hyperlink->href=$geschaeftRow->getVoteJsonUrl();



        }

        return parent::getContent();

    }


}