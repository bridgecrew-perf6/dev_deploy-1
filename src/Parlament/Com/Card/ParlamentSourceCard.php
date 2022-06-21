<?php

namespace Parlament\Com\Card;

use Nemundo\Admin\Com\Card\AdminCard;
use Parlament\Com\Small\ParlamentSource;

class ParlamentSourceCard extends AdminCard
{

    public function getContent()
    {

        $this->cardTitle = 'Impressum';
        new ParlamentSource($this);

        return parent::getContent();

    }

}