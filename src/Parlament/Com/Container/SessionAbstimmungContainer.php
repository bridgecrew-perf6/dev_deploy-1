<?php

namespace Parlament\Com\Container;

use Nemundo\Com\Html\Hyperlink\UrlHyperlink;
use Nemundo\Com\JavaScript\Module\ModuleJavaScript;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Formatting\Bold;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Heading\H3;
use Nemundo\Html\Heading\H5;
use Nemundo\Html\Paragraph\Paragraph;
use Parlament\Data\AbstimmungDatum\AbstimmungDatumReader;
use Parlament\Data\GeschaeftText\GeschaeftTextReader;
use Parlament\Reader\AbstimmungDataReader;

class SessionAbstimmungContainer extends Div
{

    public function getContent()
    {

        $script=new ModuleJavaScript($this);
        $script->src='/js/parlament/stream.js';


        $cardContainer = new Div($this);
        $cardContainer->addCssClass('card-container');


        $datumReader = new AbstimmungDatumReader();
        $datumReader->addOrder($datumReader->model->datum,SortOrder::DESCENDING);
        $datumReader->limit = 10;
        foreach ($datumReader->getData() as $abstimmungDatumRow) {

            $h1 = new H1($cardContainer);
            $h1->content = $abstimmungDatumRow->datum->getLongFormatWithWeekday();

            $abstimmungGeschaeftReader = new AbstimmungDataReader();
            $abstimmungGeschaeftReader->filter->andEqual($abstimmungGeschaeftReader->model->datum, $abstimmungDatumRow->datum->getIsoDate());
            $abstimmungGeschaeftReader->addGroup($abstimmungGeschaeftReader->model->geschaeftId);
            foreach ($abstimmungGeschaeftReader->getData() as $abstimmungGeschaeftRow) {

                $card=new Div($cardContainer);
                $card->addCssClass('card');
                //$card->addDataAttribute('geschaeft',$abstimmungGeschaeftRow->geschaeftId);

                $geschaeftRow = $abstimmungGeschaeftRow->geschaeft;

                //$h3->content = $abstimmungGeschaeftRow->geschaeft->kurzbezeichnung . ' ' . $abstimmungGeschaeftRow->geschaeft->geschaeft;

                /*$hyperlink=new SiteHyperlink($card);
                $hyperlink->site=$geschaeftRow->getSite();
                //$hyperlink->showSiteTitle=false;
                $hyperlink->addCssClass('card-title');*/


                $h3 = new H3($card);
                $h3->content= $abstimmungGeschaeftRow->geschaeft->getTitle();
                $h3->addCssClass('card-title');
                $h3->addDataAttribute('geschaeft',$abstimmungGeschaeftRow->geschaeftId);

                $content=new Div($card);
                $content->addCssClass('card-content');
                $content->id='geschaeft-content-'.$abstimmungGeschaeftRow->geschaeftId;


                $p = new Paragraph($content);
                $p->content = 'Geschäftstyp: ';

                $bold = new Bold($p);
                $bold->content = $geschaeftRow->geschaeftstyp->geschaeftstyp;

                $p = new Paragraph($content);
                $p->content = 'Status: ';
                $bold = new Bold($p);
                $bold->content = $geschaeftRow->geschaeftsstatus->geschaeftsstatus;





                $textReader = new GeschaeftTextReader();
                $textReader->model->loadTextTyp();
                $textReader->filter->andEqual($textReader->model->geschaeftId, $geschaeftRow->id);
                $textReader->addOrder($textReader->model->textTypId);
                foreach ($textReader->getData() as $geschaeftTextRow) {

                    $h3 = new H5($content);
                    $h3->content = $geschaeftTextRow->textTyp->textTyp;

                    $div = new ContentDiv($content);
                    $div->content = $geschaeftTextRow->text;

                }





                $abstimmungReader = new AbstimmungDataReader();
                $abstimmungReader->filter->andEqual($abstimmungReader->model->datum, $abstimmungDatumRow->datum->getIsoDate());
                $abstimmungReader->filter->andEqual($abstimmungReader->model->geschaeftId, $geschaeftRow->id);
                foreach ($abstimmungReader->getData() as $abstimmungRow) {

                    $div = new ContentDiv($content);
                    $div->content = $abstimmungRow->zeit->getTimeLeadingZero();

                    $div = new Div($content);

                    $bold = new Bold($div);
                    $bold->content = $abstimmungRow->abstimmung;


                    $div = new ContentDiv($content);
                    $div->content = $abstimmungRow->jaBedeutung . ': ' . $abstimmungRow->ja;

                    $div = new ContentDiv($content);
                    $div->content = $abstimmungRow->neinBedeutung . ': ' . $abstimmungRow->nein;


                    $div = new ContentDiv($content);
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


                $hyperlink = new UrlHyperlink($content);
                $hyperlink->openNewWindow=true;
                $hyperlink->content='Curia Vista';
                $hyperlink->url=$geschaeftRow->getUrl();


            }


        }


        return parent::getContent();
    }

}