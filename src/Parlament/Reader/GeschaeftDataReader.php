<?php

namespace Parlament\Reader;

use Parlament\Data\Geschaeft\GeschaeftPaginationReader;
use Parlament\Data\Geschaeft\GeschaeftReader;
use Parlament\Filter\GeschaeftFilterTrait;

class GeschaeftDataReader extends GeschaeftPaginationReader
{

    use GeschaeftFilterTrait;


    public function sortByDatum() {
        $this->addOrder($this->model->datumEinreichung);
    }



    public function loadFilter() {

        $this->model->loadGeschaeftstyp();
        $this->model->loadGeschaeftsstatus();
        $this->model->loadSession();

        if ($this->sessionId !== null) {
            $this->filter->andEqual($this->model->sessionId, $this->sessionId);
        }

        if ($this->geschaeftstypId !== null) {
            $this->filter->andEqual($this->model->geschaeftstypId, $this->geschaeftstypId);
        }

        if ($this->geschaeftsstatusId !== null) {
            $this->filter->andEqual($this->model->geschaeftsstatusId, $this->geschaeftsstatusId);
        }



    }



    public function getData()
    {


        return parent::getData();

    }


}