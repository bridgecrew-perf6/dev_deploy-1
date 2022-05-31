<?php

namespace Parlament\Row;

use Parlament\Data\Abstimmung\AbstimmungRow;
use Parlament\Parameter\AbstimmungParameter;
use Parlament\Site\Abstimmung\AbstimmungItemSite;

class AbstimmungCustomRow extends AbstimmungRow
{

    public function getSite()
    {

        $site = clone(AbstimmungItemSite::$site);
        $site->addParameter(new AbstimmungParameter($this->id));

        $abstimmung = $this->abstimmung;
        if ($abstimmung === '') {
            $abstimmung = 'Abstimmung';
        }

        $site->title = $abstimmung;

        return $site;

    }


    public function getJsonUrl()
    {

        $url = 'http://ws-old.parlament.ch/votes/affairs/' . $this->geschaeftId . '?format=json';
        return $url;

    }

}