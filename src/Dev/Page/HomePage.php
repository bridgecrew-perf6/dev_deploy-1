<?php

namespace Dev\Page;

use Dev\Template\DevTemplate;
use Nemundo\Admin\Com\Card\AdminCardContainer;
use Nemundo\Admin\Com\Layout\AdminTwoColumnGridLayout;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Meteoschweiz\Com\Card\DayRecordTemperatureCard;
use Nemundo\Meteoschweiz\Com\Card\MaxTemperatureCard;

class HomePage extends DevTemplate
{
    public function getContent()
    {

        $cardContainer = new AdminTwoColumnGridLayout($this);  // new AdminCardContainer($this);

        new MaxTemperatureCard($cardContainer);
        new DayRecordTemperatureCard($cardContainer);



        return parent::getContent();

    }
}