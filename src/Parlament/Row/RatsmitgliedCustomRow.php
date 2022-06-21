<?php

namespace Parlament\Row;

use Nemundo\Bfs\Gemeinde\Parameter\RatsmitgliedParameter;
use Parlament\Data\Ratsmitglied\RatsmitgliedRow;
use Parlament\Site\Ratsmitglied\RatsmitgliedItemSite;

// Parlament\Row\RatsmitgliedCustomRow


class RatsmitgliedCustomRow extends RatsmitgliedRow
{


    public function getSite() {

        $site = clone(RatsmitgliedItemSite::$site);
        $site->addParameter(new RatsmitgliedParameter($this->id));
        $site->title=$this->getVornameName();

        return $site;

    }


    public function getNameVorname() {

        $text = $this->name.' '.$this->vorname;
        return $text;

    }


    public function getVornameName() {

        $text = $this->vorname.' '.$this->name;
        return $text;

    }



    /*
$row->addText($ratsmitgliedRow->name);
$row->addText($ratsmitgliedRow->vorname);
    */




    public function getHomepageUrl() {

        $homepage = 'http://'.$this->homepage;
        return $homepage;

    }


}