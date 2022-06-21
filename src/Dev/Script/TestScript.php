<?php

namespace Dev\Script;

use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Content\App\WebRadio\Application\WebRadioApplication;
use Nemundo\Meteoschweiz\Application\MeteoschweizApplication;
use Parlament\Application\ParlamentApplication;


class TestScript extends AbstractConsoleScript
{

    protected function loadScript()
    {
        $this->scriptName = 'test';
    }


    public function run()
    {


        //(new ParlamentApplication())->installApp();





        //https://s5.radio.co/sca4082ebb/listen



    }


}