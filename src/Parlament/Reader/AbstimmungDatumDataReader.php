<?php

namespace Parlament\Reader;

use Nemundo\Db\Sql\Order\SortOrder;
use Parlament\Data\AbstimmungDatum\AbstimmungDatumReader;

class AbstimmungDatumDataReader extends AbstimmungDatumReader
{

    public function getData()
    {

        $this->addOrder($this->model->datum, SortOrder::DESCENDING);
        return parent::getData();

    }

}