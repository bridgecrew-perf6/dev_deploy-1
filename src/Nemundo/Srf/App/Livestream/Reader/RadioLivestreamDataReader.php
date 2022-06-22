<?php

namespace Nemundo\Srf\App\Livestream\Reader;

use Nemundo\Srf\App\Livestream\Data\RadioLivestream\RadioLivestreamReader;

class RadioLivestreamDataReader extends RadioLivestreamReader
{

    public function getData()
    {
        $this->addOrder($this->model->livestream);
        return parent::getData();
    }

}