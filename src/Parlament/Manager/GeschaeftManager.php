<?php

namespace Parlament\Manager;

use Nemundo\Core\Base\AbstractBase;
use Parlament\Data\Geschaeft\GeschaeftReader;

class GeschaeftManager extends AbstractBase
{

    public function getGeschaeftRow($geschaeftId)
    {


        $reader = new GeschaeftReader();
        $reader->model->loadGeschaeftstyp();
        $reader->model->loadGeschaeftsstatus();
        $reader->model->loadSession();

        return $reader->getRowById($geschaeftId);

    }






}