<?php

namespace Nemundo\Admin\Com\ListBox;

use Nemundo\Com\FormBuilder\Item\AbstractDatePicker;
use Nemundo\Html\Form\Formatting\Label;
use Nemundo\Html\Formatting\Bold;

class AdminDatePicker extends AbstractDatePicker
{

    use AdminErrorMessageTrait;


    public function getContent()
    {

        $this->prepareHtml();

        $this->addCssClass('admin-textbox');

        $label = new Label();
        $label->id = 'label_'.$this->name;
        $label->content = $this->getLabelErrorMessage();

        /*
        if ($this->showErrorMessage) {

            $bold = new Bold();
            $bold->addCssClass('admin-form-error');
            $bold->content = $this->errorMessage;

            $label->content .= ' ' . $bold->getBodyContent();

        }*/

        $this->addContainer($label);
        $this->addContainer($this->textInput);

        return parent::getContent();

    }

}