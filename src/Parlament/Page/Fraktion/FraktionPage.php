<?php

namespace Parlament\Page\Fraktion;

use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Block\Hr;
use Nemundo\Html\Heading\H1;
use Nemundo\Html\Heading\H2;
use Parlament\Manager\FraktionManager;
use Parlament\Site\Fraktion\FraktionSite;

class FraktionPage extends AbstractTemplateDocument
{
    public function getContent()
    {

        $h1 = new H1($this);
        $h1->content = FraktionSite::$site->title;

        foreach ((new FraktionManager())->getFraktionData() as $row) {

            $h2 = new H2($this);
            $h2->content = $row->fraktion;

            new Hr($this);

        }


        return parent::getContent();
    }
}