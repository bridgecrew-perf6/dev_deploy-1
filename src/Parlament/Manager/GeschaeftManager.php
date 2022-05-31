<?php

namespace Parlament\Manager;

use Nemundo\Core\Base\AbstractBase;
use Nemundo\Db\Sql\Order\SortOrder;
use Parlament\Data\Abstimmung\AbstimmungPaginationReader;
use Parlament\Data\Abstimmung\AbstimmungReader;
use Parlament\Data\Fraktion\FraktionReader;
use Parlament\Data\Geschaeft\GeschaeftReader;

class GeschaeftManager extends AbstractBase
{


    public function getGeschaeftRow($geschaeftId) {


        $reader= new GeschaeftReader();
        //$reader->model->loadGeschaeft();
        //$reader->model->geschaeft->loadGeschaeftstyp();


        return $reader->getRowById($geschaeftId);



    }




}