<?php

namespace Dev\Import;

use Nemundo\Content\App\WebRadio\Content\WebRadio\WebRadioContentBuilder;

class KontrafunkContentBuilder extends WebRadioContentBuilder
{

    public function saveContent()
    {

        $this->webRadio = 'Kontrafunk';
        $this->streamUrl = 'https://s5.radio.co/sca4082ebb/listen';

        parent::saveContent();

    }

}