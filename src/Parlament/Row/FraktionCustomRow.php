<?php

namespace Parlament\Row;

use Parlament\Data\Fraktion\FraktionRow;
use Parlament\Parameter\FraktionParameter;
use Parlament\Site\Fraktion\FraktionItemSite;


class FraktionCustomRow extends FraktionRow
{

    public function getSite()
    {

        $site = clone(FraktionItemSite::$site);
        $site->addParameter(new FraktionParameter($this->id));
        $site->title = $this->fraktion;

        return $site;

    }

}