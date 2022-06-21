<?php

namespace Parlament\Com\ListBox;

use Nemundo\Admin\Com\ListBox\AdminListBox;
use Parlament\Data\Entscheidung\EntscheidungReader;
use Parlament\Data\Rat\RatReader;

class EntscheidungListBox extends AdminListBox
{

    public function __construct($parentContainer = null)
    {
        parent::__construct($parentContainer);

        $this->label = 'Entscheidung';
        $this->name = 'entscheidung';

    }


    public function getContent()
    {

        $reader = new EntscheidungReader();
        //$reader->addOrder($reader->model->rat);
        foreach ($reader->getData() as $row) {
            $this->addItem($row->id, $row->entscheidung);
        }

        return parent::getContent();
    }
}