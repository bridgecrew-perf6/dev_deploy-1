<?php

namespace Parlament\Com\Table;

use Nemundo\Admin\Com\Table\AdminBootstrapTable;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\Html\Listing\UnorderedList;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Html\Hyperlink\Hyperlink;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTable;
use Nemundo\Package\Bootstrap\Table\BootstrapClickableTableRow;
use Parlament\Data\Abstimmung\AbstimmungReader;
use Parlament\Data\Geschaeft\GeschaeftReader;
use Parlament\Filter\GeschaeftFilterTrait;
use Parlament\Reader\GeschaeftDataReader;

class GeschaeftTable extends AdminTable  // BootstrapClickableTable
{

    //use GeschaeftFilterTrait;

    /**
     * @var GeschaeftReader
     */
    public $geschaeftReader;

    public function getContent()
    {

        $header = new TableHeader($this);
        $header->addText('Datum Einreichung');
        $header->addText('Kürzel');
        $header->addText('Geschäft');
        $header->addText('Typ');
        $header->addText('Status');
        $header->addText('Session');
        $header->addText('Abstimmung');
        $header->addText('Last Update');

        /*$reader = new GeschaeftDataReader();
        $reader->sessionId = $this->sessionId;
        $reader->geschaeftstypId = $this->geschaeftstypId;
        $reader->geschaeftsstatusId = $this->geschaeftsstatusId;*/


        foreach ($this->geschaeftReader->getData() as $geschaeftRow) {

            $row = new TableRow($this);  // new BootstrapClickableTableRow($this);
            $row->addText($geschaeftRow->datumEinreichung->getShortDateLeadingZeroFormat());
            $row->addText($geschaeftRow->kurzbezeichnung);

            $hyperlink = new SiteHyperlink($row);
            $hyperlink->site = $geschaeftRow->getSite();

            $row->addText($geschaeftRow->geschaeftstyp->geschaeftstyp);
            $row->addText($geschaeftRow->geschaeftsstatus->geschaeftsstatus);
            $row->addText($geschaeftRow->session->session);

            $ul = new UnorderedList($row);

            $abstimmungReader = new AbstimmungReader();
            $abstimmungReader->filter->andEqual($abstimmungReader->model->geschaeftId, $geschaeftRow->id);
            foreach ($abstimmungReader->getData() as $abstimmungRow) {
                //$ul->addText($abstimmungRow->abstimmung);

                $hyperlink = new SiteHyperlink($ul);
                $hyperlink->site = $abstimmungRow->getSite();

            }


            $hyperlink = new Hyperlink($row);
            $hyperlink->content = 'Detail';
            $hyperlink->href = $geschaeftRow->getUrl();

            $hyperlink = new Hyperlink($row);
            $hyperlink->content = 'Json';
            $hyperlink->href = $geschaeftRow->getJsonUrl();

            $hyperlink = new Hyperlink($row);
            $hyperlink->content = 'Vote Json';
            $hyperlink->href = $geschaeftRow->getVoteJsonUrl();

            $row->addText($geschaeftRow->lastUpdate->getShortDateTimeLeadingZeroFormat());

        }

        return parent::getContent();

    }

}