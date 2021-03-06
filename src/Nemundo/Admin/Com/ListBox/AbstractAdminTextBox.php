<?php

namespace Nemundo\Admin\Com\ListBox;

use Nemundo\Com\FormBuilder\Item\AbstractTextBox;
use Nemundo\Html\Form\Formatting\Label;

class AbstractAdminTextBox extends AbstractTextBox
{

    use AdminErrorMessageTrait;

    public function getContent()
    {

        $this->prepareHtml();

        $this->addCssClass('admin-textbox');

        $label = new Label();
        $label->id = 'label_' . $this->name;
        $label->content = $this->getLabelErrorMessage();

        $this->addContainer($label);
        $this->addContainer($this->textInput);

        return parent::getContent();

    }

}