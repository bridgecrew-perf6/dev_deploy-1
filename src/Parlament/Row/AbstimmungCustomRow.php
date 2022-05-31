<?php

namespace Parlament\Row;

use Parlament\Data\Abstimmung\AbstimmungRow;
use Parlament\Data\Geschaeft\GeschaeftRow;
use Parlament\Parameter\AbstimmungParameter;
use Parlament\Site\Abstimmung\AbstimmungItemSite;


// Parlament\Row\AbstimmungCustomRow

class AbstimmungCustomRow extends AbstimmungRow
{


    public function getSite() {

        $site=clone(AbstimmungItemSite::$site);
        $site->addParameter(new AbstimmungParameter($this->id));
        $site->title= 'Abstimmung: '.$this->abstimmung;

        return $site;

    }



    public function getUrl() {

        $url='https://www.parlament.ch/de/ratsbetrieb/suche-curia-vista/geschaeft?AffairId='.$this->id;
        return $url;

    }



    public function getJsonUrl() {

        $url='http://ws-old.parlament.ch/votes/affairs/'.$this->id.'?format=json';
        return $url;

    }







}