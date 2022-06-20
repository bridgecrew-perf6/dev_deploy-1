<?php

namespace Nemundo\Admin\Com\ListBox;

use Nemundo\Com\FormBuilder\Item\AbstractTextBox;
use Nemundo\Html\Form\Formatting\Label;
use Nemundo\Html\Formatting\Bold;

class AdminTextBox extends AbstractTextBox
{

    use AdminErrorMessageTrait;

    public function getContent()
    {

        $this->prepareHtml();

        $this->addCssClass('admin-textbox');

        $label = new Label();
        $label->id = 'label_'.$this->name;
        $label->content =$this->getLabelErrorMessage();

        $this->textInput->addCssClass('admin-input');

        $this->addContainer($label);
        $this->addContainer($this->textInput);

        return parent::getContent();

    }

}