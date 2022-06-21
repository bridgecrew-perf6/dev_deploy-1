<?php

namespace Parlament\Reader;

use Nemundo\Db\Sql\Order\SortOrder;
use Parlament\Data\Abstimmung\AbstimmungReader;
use Parlament\Filter\GeschaeftFilterTrait;

class AbstimmungDataReader extends AbstimmungReader
{

    use GeschaeftFilterTrait;

    public function getData()
    {

        $this->model->loadGeschaeft();
        $this->model->geschaeft->loadSession();
        $this->model->geschaeft->loadGeschaeftstyp();
        $this->model->geschaeft->loadGeschaeftsstatus();

        if ($this->sessionId!==null) {
            $this->filter->andEqual($this->model->geschaeft->sessionId,$this->sessionId);
        }

        if ($this->geschaeftstypId!==null) {
            $this->filter->andEqual($this->model->geschaeft->geschaeftstypId,$this->geschaeftstypId);
        }

        if ($this->geschaeftsstatusId!==null) {
            $this->filter->andEqual($this->model->geschaeft->geschaeftsstatusId,$this->geschaeftsstatusId);
        }

        //$this->addOrder($this->model->id,SortOrder::DESCENDING);
        $this->addOrder($this->model->datum,SortOrder::DESCENDING);
        $this->addOrder($this->model->zeit,SortOrder::DESCENDING);

        return parent::getData();

    }

}