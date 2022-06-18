<?php

namespace Nemundo\Content\App\File\Package;


use Nemundo\Com\Package\AbstractPackage;
use Nemundo\Content\App\ContentAppProject;

class FilePackage extends AbstractPackage
{

    protected function loadPackage()
    {
        $this->project=new ContentAppProject();
        $this->packageName='content_file';
    }

}