<?php

namespace Dev\Page;

use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Paragraph\Paragraph;


class TestPage extends AbstractTemplateDocument
{

    public function getContent()
    {

        $p=new Paragraph($this);
        $p->content = 'adsfasdf asdf asd f asdf asd fas df asd fasd f sad fsad f asdf asd f asdf';


        return parent::getContent();

    }

}