<?php

namespace Nemundo\Bfs\Gemeinde\Com\Select;

use Nemundo\Bfs\Gemeinde\Data\Kanton\KantonReader;
use Nemundo\Bfs\Gemeinde\Manager\KantonManager;
use Nemundo\Html\Form\Select\Option;
use Nemundo\Html\Form\Select\Select;
use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;

class KantonSelect extends Select
{

    public function getContent()
    {

        foreach ((new KantonManager())->getKantonReader() as $row) {

            $option=new Option($this);
            $option->value= $row->id;
            $option->label= $row->kanton;

        }

        return parent::getContent();
    }

}