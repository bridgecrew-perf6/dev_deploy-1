<?php

namespace Parlament\Com\ListBox;

use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;
use Parlament\Data\Fraktion\FraktionReader;
use Parlament\Data\Kommission\KommissionReader;
use Parlament\Data\Rat\RatReader;
use Parlament\Data\Session\SessionReader;

class KommissionListBox extends BootstrapListBox
{

    public function __construct($parentContainer = null)
    {
        parent::__construct($parentContainer);

        $this->label = 'Kommission';
        $this->name='kommission';

    }

    public function getContent()
    {


        $reader = new KommissionReader();
        $reader->addOrder($reader->model->kommission);
        foreach ($reader->getData() as $row) {
            $this->addItem($row->id, $row->kommission);
        }

        return parent::getContent();
    }
}