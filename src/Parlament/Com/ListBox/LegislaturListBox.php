<?php

namespace Parlament\Com\ListBox;

use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;
use Parlament\Data\Legislatur\LegislaturReader;

class LegislaturListBox extends BootstrapListBox
{

    public function __construct($parentContainer = null)
    {
        parent::__construct($parentContainer);

        $this->label = 'Legislatur';
        $this->name='legislatur';

    }

    public function getContent()
    {


        $reader = new LegislaturReader();
        $reader->addOrder($reader->model->id, SortOrder::DESCENDING);
        foreach ($reader->getData() as $row) {
            $this->addItem($row->id, $row->legislatur);
        }

        return parent::getContent();
    }
}