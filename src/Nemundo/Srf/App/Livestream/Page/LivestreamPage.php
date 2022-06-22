<?php

namespace Nemundo\Srf\App\Livestream\Page;

use Nemundo\Admin\Com\Video\AdminResponsiveVideo;
use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Block\Div;
use Nemundo\Srf\App\Livestream\Com\JavaScript\LivestreamModuleJavaScript;
use Nemundo\Srf\App\Livestream\Data\RadioLivestream\RadioLivestreamReader;
use Nemundo\Srf\App\Livestream\Reader\RadioLivestreamDataReader;
use Nemundo\Srf\Com\Player\SrfPlayer;

class LivestreamPage extends AbstractTemplateDocument
{
    public function getContent()
    {



        new LivestreamModuleJavaScript($this);

        $div=new Div($this);
        $div->id = "srf-livestream";





        /*
        $reader=new RadioLivestreamDataReader();
        foreach ($reader->getData() as $livestreamRow) {

            $responsive = new AdminResponsiveVideo($this);

            $player = new SrfPlayer($responsive);
            $player->urn = $livestreamRow->urn;

        }*/



        return parent::getContent();
    }
}