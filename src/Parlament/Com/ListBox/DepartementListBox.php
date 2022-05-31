<?php

namespace Parlament\Com\ListBox;

use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;
use Parlament\Data\Departement\DepartementReader;
use Parlament\Data\Session\SessionReader;
use Parlament\Data\Thema\ThemaReader;
use Parlament\Manager\SessionManager;

class DepartementListBox extends BootstrapListBox
{

    public function __construct($parentContainer = null)
    {
        parent::__construct($parentContainer);

        $this->label = 'Departement';
        $this->name='departement';

    }


    public function getContent()
    {

        $reader = new DepartementReader();
        $reader->addOrder($reader->model->departement);
        foreach ($reader->getData()as $row) {
            $this->addItem($row->id, $row->departement);
        }

        return parent::getContent();
    }
}