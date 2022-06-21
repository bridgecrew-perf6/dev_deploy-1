<?php

namespace Parlament\Reader;

use Nemundo\Db\Sql\Order\SortOrder;
use Parlament\Data\Session\SessionReader;

class SessionDataReader extends SessionReader
{

    public function getData()
    {

        $this->addOrder($this->model->id, SortOrder::DESCENDING);

        return parent::getData();

    }

}