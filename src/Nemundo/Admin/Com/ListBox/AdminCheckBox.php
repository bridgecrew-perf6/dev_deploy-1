<?php

namespace Nemundo\Admin\Com\ListBox;


use Nemundo\Com\FormBuilder\Item\AbstractCheckBox;
use Nemundo\Html\Form\Formatting\Label;
use Nemundo\Html\Formatting\Bold;

class AdminCheckBox extends AbstractCheckBox
{

    public function getContent()
    {

        $this->prepareHtml();

        $this->tagName = 'div';
        $this->addCssClass('admin-textbox');

        $label = new Label($this);
        $label->content = $this->checkbox->getContent()->bodyContent . ' ' . $this->getLabelText();

        $this->checkbox->addCssClass('admin-checkbox');


        if ($this->showErrorMessage) {

            $bold = new Bold();
            $bold->addCssClass('form-control-label');
            $bold->content = $this->errorMessage;

            $label->content .= ' ' . $bold->getContent()->bodyContent;
            $this->addCssClass('has-danger');
            $this->checkbox->addCssClass('form-control-danger');

        }

        return parent::getContent();

    }

}