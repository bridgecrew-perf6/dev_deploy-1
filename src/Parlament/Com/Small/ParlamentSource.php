<?php

namespace Parlament\Com\Small;

use Nemundo\Html\Formatting\Small;
use Parlament\Data\LastUpdate\LastUpdateReader;

class ParlamentSource extends Small
{

    public function getContent()
    {

        $this->content='Quelle: Parlamentsdienste der Bundesversammlung, Bern';

        $reader=new LastUpdateReader();
        foreach ($reader->getData() as $lastUpdateRow) {
            $this->content .=' / Last Update: '.$lastUpdateRow->lastUpdate->getShortDateTimeLeadingZeroFormat();
        }



        return parent::getContent();
    }

}