<?php

namespace Parlament\Com\Container;

use Nemundo\Com\Html\Hyperlink\SiteHyperlink;
use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Block\Hr;
use Nemundo\Html\Formatting\Bold;
use Nemundo\Html\Heading\H3;
use Parlament\Data\Abstimmung\AbstimmungReader;
use Parlament\Data\Geschaeft\GeschaeftReader;
use Parlament\Reader\GeschaeftDataReader;

class AbstimmungContainer extends Div
{

    /**
     * @var AbstimmungReader
     */
    public $abstimmungReader;


    public function getContent()
    {



        foreach ($this->abstimmungReader->getData() as $abstimmungRow) {

            $hyperlink=new SiteHyperlink($this);
            $hyperlink->site=$abstimmungRow->getSite();
            $hyperlink->showSiteTitle=false;

            $h3=new H3($hyperlink);
            $h3->content=$abstimmungRow->abstimmung;  //kurzbezeichnung.' '. $geschaeftRow->geschaeft;

            /*$typ=new ContentDiv($this);
            $typ->content=$geschaeftRow->geschaeftstyp->geschaeftstyp;*/


            $div = new ContentDiv($this);
            $div->content = $abstimmungRow->datum->getShortDateLeadingZeroFormat().' '. $abstimmungRow->zeit->getTimeLeadingZero();

            /*
            $div = new Div($this);

            $bold = new Bold($div);
            $bold->content = $abstimmungRow->abstimmung;*/


            $div = new ContentDiv($this);
            $div->content = $abstimmungRow->jaBedeutung . ': ' . $abstimmungRow->ja;

            $div = new ContentDiv($this);
            $div->content = $abstimmungRow->neinBedeutung . ': ' . $abstimmungRow->nein;


            $div = new ContentDiv($this);
            $div->content = 'Enthaltungen: ' . $abstimmungRow->enthaltung;



            new Hr($this);


            /*
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
            $hyperlink->href=$geschaeftRow->getVoteJsonUrl();*/



        }

        return parent::getContent();

    }

}