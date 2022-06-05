<?php

namespace Parlament\Com\ListBox;

use Nemundo\Admin\Com\ListBox\AdminListBox;
use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;
use Parlament\Manager\FraktionManager;

class FraktionListBox extends AdminListBox  // BootstrapListBox
{


    public function __construct($parentContainer = null)
    {
        parent::__construct($parentContainer);

        $this->label = 'Fraktion';
        $this->name = 'fraktion';

    }


    public function getContent()
    {

        /*$reader = new FraktionReader();
        $reader->filter->andEqual($reader->model->aktiv, true);
        $reader->addOrder($reader->model->fraktion);
        foreach ($reader->getData() as $row) {*/
        foreach ((new FraktionManager())->getFraktionData() as $row) {
            $this->addItem($row->id, $row->fraktion);
        }

        return parent::getContent();
    }
}