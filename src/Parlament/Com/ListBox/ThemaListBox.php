<?php

namespace Parlament\Com\ListBox;

use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;
use Parlament\Data\Session\SessionReader;
use Parlament\Data\Thema\ThemaReader;
use Parlament\Manager\SessionManager;

class ThemaListBox extends BootstrapListBox
{

    public function __construct($parentContainer = null)
    {
        parent::__construct($parentContainer);

        $this->label = 'Thema';
        $this->name='thema';

    }


    public function getContent()
    {

        $reader = new ThemaReader();
        $reader->addOrder($reader->model->thema);
        foreach ($reader->getData()as $row) {
            $this->addItem($row->id, $row->thema);
        }

        return parent::getContent();
    }
}