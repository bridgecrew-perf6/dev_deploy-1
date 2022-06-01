<?php

namespace Parlament\Com\Container;

use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Block\Hr;
use Nemundo\Html\Heading\H3;
use Parlament\Data\Geschaeft\GeschaeftReader;
use Parlament\Reader\GeschaeftDataReader;

class GeschaeftContainer extends Div
{

    /**
     * @var GeschaeftReader
     */
    public $gescaheftReader;


    public function getContent()
    {



        /*$reader= new GeschaeftDataReader();

        if ($session->hasValue()) {
            $reader->sessionId=$session->getValue();
        }*/

        foreach ($this->gescaheftReader->getData() as $geschaeftRow) {

            $h3=new H3($this);
            $h3->content=$geschaeftRow->getTitle();  //kurzbezeichnung.' '. $geschaeftRow->geschaeft;

            $typ=new ContentDiv($this);
            $typ->content=$geschaeftRow->geschaeftstyp->geschaeftstyp;

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