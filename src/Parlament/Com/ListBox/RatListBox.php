<?php

namespace Parlament\Com\ListBox;

use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;
use Parlament\Data\Rat\RatReader;
use Parlament\Data\Session\SessionReader;

class RatListBox extends BootstrapListBox
{

    public function __construct($parentContainer = null)
    {
        parent::__construct($parentContainer);

        $this->label = 'Rat';
        $this->name='rat';

    }


    public function getContent()
    {


        $reader = new RatReader();
        $reader->addOrder($reader->model->rat);
        foreach ($reader->getData() as $row) {
            $this->addItem($row->id, $row->rat);
        }

        return parent::getContent();
    }
}