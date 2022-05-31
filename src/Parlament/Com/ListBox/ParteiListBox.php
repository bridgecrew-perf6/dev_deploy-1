<?php

namespace Parlament\Com\ListBox;

use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;
use Parlament\Data\Partei\ParteiReader;
use Parlament\Data\Session\SessionReader;

class ParteiListBox extends BootstrapListBox
{

    public function __construct($parentContainer = null)
    {
        parent::__construct($parentContainer);

        $this->label = 'Partei';
        $this->name='partei';

    }

    public function getContent()
    {


        $reader = new ParteiReader();
        $reader->addOrder($reader->model->partei);
        foreach ($reader->getData() as $row) {
            $this->addItem($row->id, $row->partei);
        }

        return parent::getContent();
    }
}