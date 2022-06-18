<?php

namespace Nemundo\Meteoschweiz\Com\Card;

use Nemundo\Admin\Com\Card\AdminCard;
use Nemundo\Admin\Com\Item\AdminItemContainer;
use Nemundo\Admin\Com\Item\AdminItemLarge;
use Nemundo\Admin\Com\Item\AdminItemSmall;
use Nemundo\Admin\Com\Item\AdminItemTitle;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Html\Layout\Footer;
use Nemundo\Html\Paragraph\Paragraph;
use Nemundo\Meteoschweiz\Com\Small\MeteoschweizSourceSmall;
use Nemundo\Meteoschweiz\Data\Messwert\MesswertReader;
use Nemundo\Meteoschweiz\Data\MesswertDateTime\MesswertDateTimeReader;

class MaxTemperatureCard extends AdminCard
{

    public function getContent()
    {

        $this->cardTitle = 'Aktuelle Temperatur';

        $dateTimeReader = new MesswertDateTimeReader();
        $dateTimeReader->addOrder($dateTimeReader->model->dateTime, SortOrder::DESCENDING);
        $dateTimeReader->limit = 1;


        foreach ($dateTimeReader->getData() as $dateTimeRow) {

            $messwertReader = new MesswertReader();
            $messwertReader->model->loadStation();
            $messwertReader->filter->andEqual($messwertReader->model->dateTimeId, $dateTimeRow->id);
            $messwertReader->filter->andEqual($messwertReader->model->hasTemperature, true);
            $messwertReader->addOrder($messwertReader->model->temperature, SortOrder::DESCENDING);
            $messwertReader->limit = 10;

            foreach ($messwertReader->getData() as $messwertRow) {

                $container = new AdminItemContainer($this);

                $div = new AdminItemTitle($container);
                $div->content = $messwertRow->station->station;

                $div = new AdminItemLarge($container);
                $div->content = $messwertRow->getTemperatureText();

                $small = new AdminItemSmall($container);
                $small->content = $messwertRow->station->geoCoordinate->altitude . ' m.ü.M.';

            }

            $p = new Paragraph($this);
            $p->content = $dateTimeRow->dateTime->getShortDateTimeLeadingZeroFormat() . ' UTC';

        }

        $footer = new Footer($this);

        new MeteoschweizSourceSmall($footer);

        return parent::getContent();

    }

}