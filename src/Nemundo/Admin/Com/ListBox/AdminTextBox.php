<?php

namespace Nemundo\Admin\Com\ListBox;

use Nemundo\Com\FormBuilder\Item\AbstractTextBox;
use Nemundo\Html\Form\Formatting\Label;

class AdminTextBox extends AbstractTextBox
{

    public function getContent()
    {

        $this->prepareHtml();

        //$this->select->addCssClass('nemundo-select');

        $label = new Label();
        $label->id = 'label_'.$this->name;
        $label->content = $this->getLabelText();

        $this->addContainer($label);
        $this->addContainer($this->textInput);

        return parent::getContent();

    }

}