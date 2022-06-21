<?php

namespace Parlament\Com\Container;

use Nemundo\Com\Html\Hyperlink\UrlHyperlink;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Formatting\Bold;
use Nemundo\Html\Heading\H3;
use Nemundo\Html\Paragraph\Paragraph;
use Parlament\Data\Geschaeft\GeschaeftRow;
use Parlament\Reader\AbstimmungDataReader;

class GeschaeftItemContainer extends Div
{

    /**
     * @var GeschaeftRow
     */
    public $gescaheftRow;


    public function getContent()
    {


        $h3 = new H3($this);
        $h3->content= $this->gescaheftRow->getTitle();
        $h3->addCssClass('card-title');
        $h3->addDataAttribute('geschaeft',$this->gescaheftRow->id);

        $content=new Div($this);
        $content->addCssClass('card-content');
        $content->id='geschaeft-content-'.$this->gescaheftRow->id;


        $hyperlink = new UrlHyperlink($content);
        $hyperlink->openNewWindow=true;
        $hyperlink->content='Informationen';
        $hyperlink->url=$this->gescaheftRow->getUrl();

        $p = new Paragraph($content);
        $p->content = $this->geschaeftRow->geschaeftstyp->geschaeftstyp;

        $p = new Paragraph($content);
        $p->content = $geschaeftRow->geschaeftsstatus->geschaeftsstatus;


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

        return parent::getContent();

    }

}