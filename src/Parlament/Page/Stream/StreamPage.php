<?php

namespace Parlament\Page\Stream;

use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Com\Html\Hyperlink\UrlHyperlink;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Block\Hr;
use Nemundo\Html\Formatting\Bold;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Heading\H3;
use Nemundo\Html\Hyperlink\Hyperlink;
use Nemundo\Html\Paragraph\Paragraph;
use Parlament\Data\AbstimmungDatum\AbstimmungDatumReader;
use Parlament\Reader\AbstimmungDataReader;
use Parlament\Template\ParlamentTemplate;

class StreamPage extends ParlamentTemplate
{

    public function getContent()
    {


        $datumReader = new AbstimmungDatumReader();
        $datumReader->addOrder($datumReader->model->datum,SortOrder::DESCENDING);
        $datumReader->limit = 10;
        foreach ($datumReader->getData() as $abstimmungDatumRow) {


            $h1 = new H1($this);
            $h1->content = $abstimmungDatumRow->datum->getLongFormatWithWeekday();




            $abstimmungGeschaeftReader = new AbstimmungDataReader();
            $abstimmungGeschaeftReader->filter->andEqual($abstimmungGeschaeftReader->model->datum, $abstimmungDatumRow->datum->getIsoDate());
            $abstimmungGeschaeftReader->addGroup($abstimmungGeschaeftReader->model->geschaeftId);
            foreach ($abstimmungGeschaeftReader->getData() as $abstimmungGeschaeftRow) {


                $geschaeftRow = $abstimmungGeschaeftRow->geschaeft;

                $h3 = new H3($this);
                //$h3->content = $abstimmungGeschaeftRow->geschaeft->kurzbezeichnung . ' ' . $abstimmungGeschaeftRow->geschaeft->geschaeft;

                $more=new SiteHyperlink($h3);
                $more->site=$geschaeftRow->getSite();



                /*$hyperlink = new UrlHyperlink($this);
                $hyperlink->openNewWindow=true;
                $hyperlink->content='Informationen';
                $hyperlink->url=$geschaeftRow->getUrl();*/



                $p = new Paragraph($this);
                $p->content = $geschaeftRow->geschaeftstyp->geschaeftstyp;

                $p = new Paragraph($this);
                $p->content = $geschaeftRow->geschaeftsstatus->geschaeftsstatus;


                $abstimmungReader = new AbstimmungDataReader();
                $abstimmungReader->filter->andEqual($abstimmungReader->model->datum, $abstimmungDatumRow->datum->getIsoDate());
                $abstimmungReader->filter->andEqual($abstimmungReader->model->geschaeftId, $geschaeftRow->id);
                foreach ($abstimmungReader->getData() as $abstimmungRow) {


                    $div = new ContentDiv($this);
                    $div->content = $abstimmungRow->zeit->getTimeLeadingZero();

                    $div = new Div($this);

                    $bold = new Bold($div);
                    $bold->content = $abstimmungRow->abstimmung;


                    $div = new ContentDiv($this);
                    $div->content = $abstimmungRow->jaBedeutung . ': ' . $abstimmungRow->ja;

                    $div = new ContentDiv($this);
                    $div->content = $abstimmungRow->neinBedeutung . ': ' . $abstimmungRow->nein;


                    $div = new ContentDiv($this);
                    $div->content = 'Enthaltungen: ' . $abstimmungRow->enthaltung;


                    /*
                    $row = new TableRow($table);
                    $row->addText($abstimmungRow->datum->getShortDateLeadingZeroFormat());
                    $row->addText($abstimmungRow->zeit->getTimeLeadingZero());

                    $hyperlink = new SiteHyperlink($row);
                    $hyperlink->site = $abstimmungRow->getSite();

                    $row->addText($abstimmungRow->jaBedeutung);
                    $row->addText($abstimmungRow->ja);
                    $row->addText($abstimmungRow->neinBedeutung);
                    $row->addText($abstimmungRow->nein);

                    $row->addText($abstimmungRow->enthaltung);*/


                }


                new Hr($this);


            }


        }


        /*
        $h1 = new H1($this);
        $h1->content = 'Abstimmung';

        $form = new SearchForm($this);

        $formRow = new BootstrapRow($form);

        $geschaeftstyp = new GeschaeftstypListBox($formRow);
        $geschaeftstyp->column = true;
        $geschaeftstyp->searchMode = true;
        $geschaeftstyp->submitOnChange = true;

        $geschaeftsstatus = new GeschaeftsstatusListBox($formRow);
        $geschaeftsstatus->column = true;
        $geschaeftsstatus->searchMode = true;
        $geschaeftsstatus->submitOnChange = true;

        $session = new SessionListBox($formRow);
        $session->column = true;
        $session->searchMode = true;
        $session->submitOnChange = true;


        $table = new AbstimmungTable($this);

        if ($session->hasValue()) {
            $table->sessionId = $session->getValue();
        }

        if ($geschaeftsstatus->hasValue()) {
            $table->geschaeftsstatusId = $geschaeftsstatus->getValue();
        }

        if ($geschaeftstyp->hasValue()) {
            $table->geschaeftstypId = $geschaeftstyp->getValue();
        }

        new SourceSmall($this);*/


        return parent::getContent();

    }

}