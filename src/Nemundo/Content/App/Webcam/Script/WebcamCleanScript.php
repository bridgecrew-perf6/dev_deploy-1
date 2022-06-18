<?php

namespace Nemundo\Content\App\Webcam\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Content\App\Webcam\Content\Webcam\WebcamContentType;
use Nemundo\Content\App\Webcam\Data\Webcam\WebcamReader;

class WebcamCleanScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'webcam-clean';
    }

    public function run()
    {

        $reader = new WebcamReader();
        foreach ($reader->getData() as $row) {
            (new WebcamContentType($row->id))->deleteType();
        }

    }
}