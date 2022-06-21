<?php

namespace Nemundo\Admin\Com\ListBox;

use Nemundo\Core\Type\DateTime\Date;
use Nemundo\Html\Form\Input\InputType;

class AdminDatePicker extends AbstractAdminTextBox
{

    public function getContent()
    {

        $this->inputType = InputType::DATE;
        $this->textInput->addCssClass('admin-input');

        return parent::getContent();

    }


    // in trait
    public function getDateValue()
    {

        $date = null;
        if ($this->hasValue()) {
            $date = new Date($this->getValue());
            //$date->fromGermanFormat($this->getValue());
        }

        return $date;

    }


}