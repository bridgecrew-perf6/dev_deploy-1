<?php


namespace Nemundo\Admin\Com\ListBox;


use Nemundo\Com\FormBuilder\Item\AbstractListBox;
use Nemundo\Html\Form\Formatting\Label;
use Nemundo\Html\Formatting\Bold;
use Nemundo\Package\Bootstrap\FormElement\BootstrapFormStyle;
use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;
use Nemundo\Package\Bootstrap\Utility\BootstrapSpacing;

class AdminListBox extends AbstractListBox
{

    public function addInputDataAttribute($attribute, $value)
    {
        $this->select->addDataAttribute($attribute, $value);
    }


    public function getContent()
    {

        $this->prepareHtml();

        $this->tagName='div';
        $this->addCssClass('admin-textbox');

        if ($this->inputId !== null) {
            $this->select->id = $this->inputId;
        }

        $label = new Label();
        $label->id = 'label_'.$this->name;
        $label->content = $this->getLabelText();

       /* if ($this->showErrorMessage) {

            $bold = new Bold();
            $bold->addCssClass('form-control-label');
            $bold->content = $this->errorMessage;

            $label->content .= ' ' . $bold->getBodyContent();
            $this->addCssClass('has-danger');
            $this->select->addCssClass('form-control-danger');

        }*/

        $this->addContainer($label);
        $this->addContainer($this->select);

        return parent::getContent();

    }
}