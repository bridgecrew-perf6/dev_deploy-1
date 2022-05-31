<?php

namespace Parlament\Com\ListBox;

use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;
use Parlament\Data\Geschaeftsstatus\GeschaeftsstatusReader;
use Parlament\Data\Geschaeftstyp\GeschaeftstypReader;

class GeschaeftsstatusListBox extends BootstrapListBox
{

    public function __construct($parentContainer = null)
    {
        parent::__construct($parentContainer);

        $this->label = 'Geschäftsstatus';
        $this->name='status';

    }

    public function getContent()
    {


        $reader=new GeschaeftsstatusReader();
        $reader->addOrder($reader->model->geschaeftsstatus);
        foreach ($reader->getData() as $row) {
            $this->addItem($row->id,$row->geschaeftsstatus);
        }

        return parent::getContent();
    }
}