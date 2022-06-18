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

        //$this->select->addCssClass('nemundo-select');
        $this->addCssClass('admin-textbox');

        $label = new Label();
        $label->id = 'label_'.$this->name;
        //$label->content = $this->getLabelText();

        $label->content =$this->getLabelErrorMessage();

        /*if ($this->showErrorMessage) {

            $bold = new Bold();
            $bold->addCssClass('admin-form-error');
            $bold->content = $this->errorMessage;

            $label->content .= ' ' . $bold->getBodyContent();
            //$this->addCssClass('has-danger');
            //$this->textInput->addCssClass('form-control-danger');

        }*/


        $this->addContainer($label);
        $this->addContainer($this->textInput);

        return parent::getContent();

    }

}