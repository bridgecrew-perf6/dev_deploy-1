<?php

namespace Dev\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Meteoschweiz\Application\MeteoschweizApplication;


class TestScript extends AbstractConsoleScript
{

    protected function loadScript()
    {
        $this->scriptName = 'test';
    }


    public function run()
    {


        (new MeteoschweizApplication())->reinstallApp();


    }


}