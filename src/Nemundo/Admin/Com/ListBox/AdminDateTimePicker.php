<?php

namespace Nemundo\Admin\Com\ListBox;

use Nemundo\Html\Form\Input\InputType;

class AdminDateTimePicker extends AdminTextBox
{

    public function getContent()
    {

        $this->inputType = InputType::DATE_TIME;
        return parent::getContent();

    }

}