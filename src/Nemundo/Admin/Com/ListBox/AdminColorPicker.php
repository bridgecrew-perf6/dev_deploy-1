<?php

namespace Nemundo\Admin\Com\ListBox;

use Nemundo\Html\Form\Input\InputType;

class AdminColorPicker extends AdminTextBox
{

    public function getContent()
    {

        $this->inputType = InputType::COLOR;
        return parent::getContent();

    }

}