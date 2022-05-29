<?php

namespace Dev\Page;

use Dev\Template\DevTemplate;
use Nemundo\Html\Paragraph\Paragraph;

class HomePage extends DevTemplate
{
    public function getContent()
    {

        $p = new Paragraph($this);
        $p->content = 'hello world';

        return parent::getContent();

    }
}