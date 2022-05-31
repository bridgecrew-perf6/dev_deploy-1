<?php

namespace Parlament\Com\ListBox;

use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;
use Parlament\Data\Geschaeftstyp\GeschaeftstypReader;

class GeschaeftstypListBox extends BootstrapListBox
{

    public function __construct($parentContainer = null)
    {
        parent::__construct($parentContainer);

        $this->label = 'Geschaeftstyp';
        $this->name='typ';

    }

    public function getContent()
    {


        $reader=new GeschaeftstypReader();
        $reader->addOrder($reader->model->geschaeftstyp);
        foreach ($reader->getData() as $row) {
            $this->addItem($row->id,$row->geschaeftstyp);
        }

        return parent::getContent();
    }
}