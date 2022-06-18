<?php

namespace Nemundo\Content\App\Text\Package;


use Nemundo\Com\Package\AbstractPackage;
use Nemundo\Content\App\ContentAppProject;

class TextPackage extends AbstractPackage
{

    protected function loadPackage()
    {
        $this->project=new ContentAppProject();
        $this->packageName='content_text';
    }

}