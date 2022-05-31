<?php

namespace Parlament\Reader;

use Parlament\Data\Geschaeft\GeschaeftReader;
use Parlament\Filter\GeschaeftFilterTrait;

class GeschaeftDataReader extends GeschaeftReader
{

    use GeschaeftFilterTrait;

    public function getData()
    {

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

        return parent::getData();

    }


}