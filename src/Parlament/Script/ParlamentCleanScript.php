<?php

namespace Parlament\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Parlament\Application\ParlamentApplication;


class ParlamentCleanScript extends AbstractConsoleScript
{
    protected function loadScript()
    {
        $this->scriptName = 'parlament-clean';
    }

    public function run()
    {

        (new ParlamentApplication())->reinstallApp();

    }
}