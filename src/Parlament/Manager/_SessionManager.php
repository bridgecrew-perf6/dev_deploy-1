<?php

namespace Parlament\Manager;

use Nemundo\Core\Base\AbstractBase;
use Nemundo\Db\Sql\Order\SortOrder;
use Parlament\Data\Fraktion\FraktionReader;
use Parlament\Data\Session\SessionReader;

class SessionManager extends AbstractBase
{


    public function getSessionData() {


        $reader = new SessionReader();
        $reader->addOrder($reader->model->id, SortOrder::DESCENDING);


        return $reader->getData();



    }


}