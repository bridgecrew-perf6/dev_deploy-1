<?php

namespace Parlament\Reader;

use Parlament\Data\Fraktion\FraktionReader;

class FraktionDataReader extends FraktionReader
{

    public function getData()
    {

        $this->addOrder($this->model->fraktion);
        return parent::getData();

    }

}