<?php

namespace Dev\Script;

use Dev\Import\KontrafunkContentBuilder;
use Nemundo\App\Script\Type\AbstractConsoleScript;
use Nemundo\Content\App\WebRadio\Application\WebRadioApplication;
use Nemundo\Meteoschweiz\Application\MeteoschweizApplication;
use Nemundo\Srf\App\Livestream\Application\SrfLivestreamApplication;
use Nemundo\WebLog\Application\WebLogApplication;
use Parlament\Application\ParlamentApplication;


class TestScript extends AbstractConsoleScript
{

    protected function loadScript()
    {
        $this->scriptName = 'test';
    }


    public function run()
    {

        (new KontrafunkContentBuilder())->saveContent();


        //(new SrfLivestreamApplication())->installApp();


        //(new WebLogApplication())->installApp();







        //(new ParlamentApplication())->installApp();





        //https://s5.radio.co/sca4082ebb/listen



    }


}