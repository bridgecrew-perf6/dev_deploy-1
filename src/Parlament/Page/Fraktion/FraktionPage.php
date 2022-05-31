<?php

namespace Parlament\Page\Fraktion;

use Nemundo\Com\Template\AbstractTemplateDocument;
use Nemundo\Html\Block\Hr;
use Nemundo\Html\Heading\H2;
use Parlament\Manager\FraktionManager;

class FraktionPage extends AbstractTemplateDocument
{
    public function getContent()
    {



        foreach ((new FraktionManager())->getFraktionData() as $row) {
            //$this->addItem($row->id, $row->fraktion);

            $h2=new H2($this);
            $h2->content = $row->fraktion;

            new Hr($this);

        }





        return parent::getContent();
    }
}