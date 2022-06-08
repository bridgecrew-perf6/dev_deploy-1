<?php

namespace Parlament\Page\Geschaeft;

use Nemundo\Admin\Com\Table\AdminLabelValueTable;
use Nemundo\Admin\Com\Table\AdminBootstrapTable;
use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\Html\Listing\UnorderedList;
use Nemundo\Com\TableBuilder\TableHeader;
use Nemundo\Com\TableBuilder\TableRow;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Heading\H2;
use Nemundo\Html\Heading\H3;
use Nemundo\Html\Heading\H5;
use Parlament\Com\Container\AbstimmungContainer;
use Parlament\Com\Table\AbstimmungTable;
use Parlament\Data\Abstimmung\AbstimmungReader;
use Parlament\Data\GeschaeftKommission\GeschaeftKommissionReader;
use Parlament\Data\GeschaeftText\GeschaeftTextReader;
use Parlament\Data\GeschaeftThema\GeschaeftThemaReader;
use Parlament\Manager\GeschaeftManager;
use Parlament\Parameter\GeschaeftParameter;
use Parlament\Reader\AbstimmungDataReader;
use Parlament\Reader\GeschaeftDataReader;
use Parlament\Template\ParlamentTemplate;

class GeschaeftItemPage extends ParlamentTemplate
{

    public function getContent()
    {

        $geschaeftId = (new GeschaeftParameter())->getValue();


        //$reader = new GeschaeftDataReader();

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
        $table->addLabelValue('Datum Einreichung', $geschaeftRow->datumEinreichung->getShortDateLeadingZeroFormat());
        $table->addLabelValue('Kurzbezeichnung', $geschaeftRow->kurzbezeichnung);
        $table->addLabelValue('Session', $geschaeftRow->session->session);
        $table->addLabelHyperlink('Geschäftsdatenbank', $geschaeftRow->getUrl(),'Curia Vista');
        $table->addLabelHyperlink('Maschinenlesbare Daten', $geschaeftRow->getJsonUrl(),'Json');



        $h2 = new H2($this);
        $h2->content = 'Thema';

        $ul = new UnorderedList($this);

        $reader = new GeschaeftThemaReader();
        $reader->model->loadThema();
        $reader->filter->andEqual($reader->model->geschaeftId, $geschaeftId);
        foreach ($reader->getData() as $geschaeftThemaRow) {
            $ul->addText($geschaeftThemaRow->themaId.' - '. $geschaeftThemaRow->thema->thema);
        }


        $h2 = new H2($this);
        $h2->content = 'Kommission';

        $ul = new UnorderedList($this);

        $reader = new GeschaeftKommissionReader();
        $reader->model->loadKommission();
        $reader->filter->andEqual($reader->model->geschaeftId, $geschaeftId);
        foreach ($reader->getData() as $geschaeftKommissionRow) {
            $ul->addText($geschaeftKommissionRow->kommission->kommission);
        }



        $textReader = new GeschaeftTextReader();
        $textReader->model->loadTextTyp();
        $textReader->filter->andEqual($textReader->model->geschaeftId, $geschaeftId);
        $textReader->addOrder($textReader->model->textTypId);
        foreach ($textReader->getData() as $geschaeftTextRow) {

            $h3 = new H5($this);
            $h3->content = $geschaeftTextRow->textTyp->textTyp;

            $div = new ContentDiv($this);
            $div->content = $geschaeftTextRow->text;

        }


        /*
        $table = new AdminTable($this);

        $header = new TableHeader($table);
        $header->addText('Datum');
        $header->addText('Zeit');
        $header->addText('Abstimmung');
        $header->addText('Ja');
        $header->addEmpty();
        $header->addText('Nein');
        $header->addEmpty();
        $header->addText('Enthaltungen');*/


        $reader = new AbstimmungDataReader();
        $reader->filter->andEqual($reader->model->geschaeftId, $geschaeftId);
        $reader->addOrder($reader->model->datum);
        $reader->addOrder($reader->model->zeit);


        $table= new AbstimmungContainer($this);  // new AbstimmungTable($this);
        $table->abstimmungReader=$reader;

        //$container = new




        /*
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


        }*/


        return parent::getContent();
    }
}