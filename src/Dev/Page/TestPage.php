<?php

namespace Dev\Page;

use Nemundo\Admin\Com\ListBox\AdminColorPicker;
use Nemundo\Admin\Com\ListBox\AdminDatePicker;
use Nemundo\App\CssDesigner\Com\Form\StyleBuilderForm;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Content\App\Text\Content\Text\TextContentType;
use Nemundo\Core\File\FileSize;


class TestPage extends AbstractTemplateDocument
{

    public function getContent()
    {



        (new FileSize(null))->getText();


        (new TextContentType())->getDefaultForm($this);


        //new StyleBuilderForm($this);


        /*
        $date=new AdminDatePicker($this);
        $date->label='Datum';

        $color = new AdminColorPicker($this);
        $color->label='Wunschfarbe';*/



        return parent::getContent();

    }

}