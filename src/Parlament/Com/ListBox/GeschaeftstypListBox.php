<?php

namespace Parlament\Com\ListBox;

use Nemundo\Admin\Com\ListBox\AdminListBox;
use Parlament\Data\Geschaeftstyp\GeschaeftstypReader;

class GeschaeftstypListBox extends AdminListBox
{

    public function __construct($parentContainer = null)
    {

        parent::__construct($parentContainer);

        $this->label = 'Geschäftstyp';
        $this->name = 'typ';

    }

    public function getContent()
    {

        $reader = new GeschaeftstypReader();
        $reader->addOrder($reader->model->geschaeftstyp);
        foreach ($reader->getData() as $row) {
            $this->addItem($row->id, $row->geschaeftstyp);
        }

        return parent::getContent();
    }
}