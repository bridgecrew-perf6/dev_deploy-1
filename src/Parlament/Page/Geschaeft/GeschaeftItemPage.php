<?php

namespace Parlament\Page\Geschaeft;

use Nemundo\Admin\Com\Table\AdminLabelValueTable;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\Html\Hyperlink\UrlHyperlink;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Html\Heading\H1;
use Nemundo\Package\Bootstrap\Form\BootstrapSearchForm;
use Nemundo\Package\Bootstrap\Layout\Grid\BootstrapRow;
use Parlament\Com\ListBox\GeschaeftsstatusListBox;
use Parlament\Com\ListBox\GeschaeftstypListBox;
use Parlament\Com\ListBox\LegislaturListBox;
use Parlament\Com\ListBox\RatListBox;
use Parlament\Com\ListBox\SessionListBox;
use Parlament\Com\Table\AbstimmungRatsmitgliedTable;
use Parlament\Com\Table\GeschaeftTable;
use Parlament\Data\Abstimmung\AbstimmungReader;
use Parlament\Manager\GeschaeftManager;
use Parlament\Parameter\GeschaeftParameter;
use Parlament\Template\ParlamentTemplate;

class GeschaeftItemPage extends ParlamentTemplate
{

    public function getContent()
    {

        $geschaeftId=(new GeschaeftParameter())->getValue();

        $geschaeftRow = (new GeschaeftManager())->getGeschaeftRow($geschaeftId);


        $h1=new H1($this);
        $h1->content= $geschaeftRow->geschaeft;

        $hyperlink = new UrlHyperlink($this);
        $hyperlink->openNewWindow=true;
        $hyperlink->content='parlament.ch';
        $hyperlink->url=$geschaeftRow->getUrl();






        $table=new AdminTable($this);

        $header=new TableHeader($table);
        $header->addText('Datum');
        $header->addText('Zeit');
        $header->addText('Abstimmung');
        $header->addText('Ja');
        $header->addText('Nein');
        $header->addText('Enthaltungen');


        $reader=new AbstimmungReader();
        $reader->filter->andEqual($reader->model->geschaeftId,$geschaeftId);
        foreach ($reader->getData() as $abstimmungRow) {

            $row=new TableRow($table);
            $row->addText($abstimmungRow->datum->getShortDateLeadingZeroFormat());
            $row->addText($abstimmungRow->zeit->getTimeLeadingZero());
            //$row->addText($abstimmungRow->abstimmung);

            $hyperlink=new SiteHyperlink($row);
            $hyperlink->site=$abstimmungRow->getSite();

            $row->addText($abstimmungRow->ja);
            $row->addText($abstimmungRow->nein);
            $row->addText($abstimmungRow->enthaltung);


        }


        //$table=new AbstimmungRatsmitgliedTable($this);


        return parent::getContent();
    }
}