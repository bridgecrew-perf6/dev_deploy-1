<?php

namespace Nemundo\Bfs\Gemeinde\Com\ListBox;

use Nemundo\Bfs\Gemeinde\Data\Kanton\KantonReader;
use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;

class KantonListBox extends BootstrapListBox
{

    public function __construct($parentContainer = null)
    {
        parent::__construct($parentContainer);

        $this->label = 'Kanton';
        $this->name = 'kanton';

    }


    public function getContent()
    {

        $reader = new KantonReader();
        $reader->addOrder($reader->model->kanton);
        foreach ($reader->getData() as $row) {
            $this->addItem($row->id, $row->kanton);
        }

        return parent::getContent();
    }
}