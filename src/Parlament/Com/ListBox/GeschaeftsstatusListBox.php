<?php

namespace Parlament\Com\ListBox;

use Nemundo\Admin\Com\ListBox\AdminListBox;
use Parlament\Data\Geschaeftsstatus\GeschaeftsstatusReader;

class GeschaeftsstatusListBox extends AdminListBox
{

    public function __construct($parentContainer = null)
    {
        parent::__construct($parentContainer);

        $this->label = 'Geschäftsstatus';
        $this->name = 'status';

    }

    public function getContent()
    {

        $reader = new GeschaeftsstatusReader();
        $reader->addOrder($reader->model->geschaeftsstatus);
        foreach ($reader->getData() as $row) {
            $this->addItem($row->id, $row->geschaeftsstatus);
        }

        return parent::getContent();
    }
}