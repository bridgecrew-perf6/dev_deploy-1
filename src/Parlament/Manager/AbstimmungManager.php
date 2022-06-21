<?php

namespace Parlament\Manager;

use Nemundo\Core\Base\AbstractBase;
use Nemundo\Db\Sql\Order\SortOrder;
use Parlament\Data\Abstimmung\AbstimmungPaginationReader;
use Parlament\Data\Abstimmung\AbstimmungReader;
use Parlament\Data\Fraktion\FraktionReader;

class AbstimmungManager extends AbstractBase
{


    public function getAbstimmungRow($abstimmungId) {


        $reader= new AbstimmungReader();
        $reader->model->loadGeschaeft();
        $reader->model->geschaeft->loadGeschaeftstyp();


        return $reader->getRowById($abstimmungId);



    }




}