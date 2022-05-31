<?php

namespace Parlament\Page\Geschaeft;

use Nemundo\Admin\Com\Table\AdminLabelValueTable;
use Nemundo\Admin\Com\Table\AdminTable;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\Html\Listing\UnorderedList;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Heading\H2;
use Nemundo\Html\Heading\H3;
use Parlament\Data\Abstimmung\AbstimmungReader;
use Parlament\Data\GeschaeftText\GeschaeftTextReader;
use Parlament\Data\GeschaeftThema\GeschaeftThemaReader;
use Parlament\Manager\GeschaeftManager;
use Parlament\Parameter\GeschaeftParameter;
use Parlament\Template\ParlamentTemplate;

class GeschaeftItemPage extends ParlamentTemplate
{

    public function getContent()
    {

        $geschaeftId = (new GeschaeftParameter())->getValue();

        $geschaeftRow = (new GeschaeftManager())->getGeschaeftRow($geschaeftId);


        $h1 = new H1($this);
        $h1->content = $geschaeftRow->geschaeft;

        /*
        $hyperlink = new UrlHyperlink($this);
        $hyperlink->openNewWindow=true;
        $hyperlink->content='parlament.ch';
        $hyperlink->url=$geschaeftRow->getUrl();*/


        $table = new AdminLabelValueTable($this);

        $table->addLabelValue('Typ', $geschaeftRow->geschaeftstyp->geschaeftstyp);
        $table->addLabelValue('Status', $geschaeftRow->geschaeftsstatus->geschaeftsstatus);

        $table->addLabelValue('Kurzbezeichnung', $geschaeftRow->kurzbezeichnung);
        $table->addLabelValue('Session', $geschaeftRow->session->session);


        $table->addLabelHyperlink('Json', $geschaeftRow->getJsonUrl());
        $table->addLabelHyperlink('Url', $geschaeftRow->getUrl());


        $h2 = new H2($this);
        $h2->content = 'Thema';

        $ul = new UnorderedList($this);

        $reader = new GeschaeftThemaReader();
        $reader->model->loadThema();
        $reader->filter->andEqual($reader->model->geschaeftId, $geschaeftId);
        foreach ($reader->getData() as $geschaeftThemaRow) {
            $ul->addText($geschaeftThemaRow->thema->thema);
        }


        $textReader = new GeschaeftTextReader();
        $textReader->model->loadTextTyp();
        $textReader->filter->andEqual($textReader->model->geschaeftId, $geschaeftId);
        foreach ($textReader->getData() as $geschaeftTextRow) {

            $h3 = new H3($this);
            $h3->content = $geschaeftTextRow->textTyp->textTyp;

            $div = new ContentDiv($this);
            $div->content = $geschaeftTextRow->text;

        }


        $table = new AdminTable($this);

        $header = new TableHeader($table);
        $header->addText('Datum');
        $header->addText('Zeit');
        $header->addText('Abstimmung');
        $header->addText('Ja');
        $header->addEmpty();
        $header->addText('Nein');
        $header->addEmpty();
        $header->addText('Enthaltungen');


        $reader = new AbstimmungReader();
        $reader->filter->andEqual($reader->model->geschaeftId, $geschaeftId);
        $reader->addOrder($reader->model->datum);
        $reader->addOrder($reader->model->zeit);
        foreach ($reader->getData() as $abstimmungRow) {

            $row = new TableRow($table);
            $row->addText($abstimmungRow->datum->getShortDateLeadingZeroFormat());
            $row->addText($abstimmungRow->zeit->getTimeLeadingZero());

            $hyperlink = new SiteHyperlink($row);
            $hyperlink->site = $abstimmungRow->getSite();

            $row->addText($abstimmungRow->jaBedeutung);
            $row->addText($abstimmungRow->ja);
            $row->addText($abstimmungRow->neinBedeutung);
            $row->addText($abstimmungRow->nein);

            $row->addText($abstimmungRow->enthaltung);


        }


        return parent::getContent();
    }
}