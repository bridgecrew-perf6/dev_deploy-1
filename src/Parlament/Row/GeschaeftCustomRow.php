<?php

namespace Parlament\Row;

use Nemundo\Html\Block\ContentDiv;
use Nemundo\Html\Block\Div;
use Nemundo\Html\Heading\H5;
use Parlament\Data\Geschaeft\GeschaeftRow;
use Parlament\Data\GeschaeftText\GeschaeftTextReader;
use Parlament\Parameter\AbstimmungParameter;
use Parlament\Parameter\GeschaeftParameter;
use Parlament\Site\Abstimmung\AbstimmungItemSite;
use Parlament\Site\Geschaeft\GeschaeftItemSite;


// Parlament\Row\GeschaeftCustomRow

class GeschaeftCustomRow extends GeschaeftRow
{


    public function getTitle() {

        $title = $this->kurzbezeichnung . ' ' .$this->geschaeft;
        return $title;

    }


    public function getText() {

        $text = '';

        $textReader = new GeschaeftTextReader();
        $textReader->model->loadTextTyp();
        $textReader->filter->andEqual($textReader->model->geschaeftId, $this->id);
        $textReader->addOrder($textReader->model->textTypId);
        foreach ($textReader->getData() as $geschaeftTextRow) {

            $container=new Div();

            $h3 = new H5($container);
            $h3->content = $geschaeftTextRow->textTyp->textTyp;

            $div = new ContentDiv($container);
            $div->content = $geschaeftTextRow->text;

            $text.= $container->getBodyContent();

        }

        return $text;

    }




    public function getSite() {

        $site=clone(GeschaeftItemSite::$site);
        $site->addParameter(new GeschaeftParameter($this->id));
        //$site->title=$this->geschaeft;
        $site->title=$this->getTitle();

        return $site;

    }



    public function getUrl() {

        $url='https://www.parlament.ch/de/ratsbetrieb/suche-curia-vista/geschaeft?AffairId='.$this->id;
        return $url;

    }

    public function getJsonUrl() {

        $url='http://ws-old.parlament.ch/affairs/'.$this->id.'?format=json';
        return $url;

    }


    public function getVoteJsonUrl() {

        $url='http://ws-old.parlament.ch/votes/affairs/'.$this->id.'?format=json';
        return $url;

    }







}