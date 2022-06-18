<?php

namespace Nemundo\Meteoschweiz\Com\Card;

use Nemundo\Admin\Com\Card\AdminCard;
use Nemundo\Admin\Com\Item\AdminItemContainer;
use Nemundo\Admin\Com\Item\AdminItemLarge;
use Nemundo\Admin\Com\Item\AdminItemSmall;
use Nemundo\Admin\Com\Item\AdminItemTitle;
use Nemundo\Core\Type\DateTime\Date;
use Nemundo\Db\Sql\Field\Aggregate\MaxField;
use Nemundo\Db\Sql\Field\Aggregate\MinField;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Html\Layout\Footer;
use Nemundo\Meteoschweiz\Com\Small\MeteoschweizSourceSmall;
use Nemundo\Meteoschweiz\Data\Messwert\MesswertReader;

class DayRecordTemperatureCard extends AdminCard
{

    public function getContent()
    {

        $date = (new Date())->setNow();  //->minusDay(1);

        $this->cardTitle = 'Tages Temperaturrekord '.$date->getShortDateFormat();


        $messwertReader = new MesswertReader();
        $messwertReader->model->loadStation();
        $messwertReader->model->loadDateTime();
        $messwertReader->filter->andEqual($messwertReader->model->hasTemperature, true);
        $messwertReader->filter->andEqual($messwertReader->model->dateTime->date, $date->getIsoDate());
        $messwertReader->addGroup($messwertReader->model->stationId);
        //$messwertReader->addOrder($messwertReader->model->temperature, SortOrder::DESCENDING);

        //$messwertReader->addOrder($messwertReader->model->stationId);
        //$messwertReader->addOrder($messwertReader->model->temperature, SortOrder::ASCENDING);

        $max=new MaxField($messwertReader);
        //$max= new MinField($messwertReader);
        $max->aggregateField= $messwertReader->model->temperature;

        //$messwertReader->limit = 10;

        $messwertReader->addOrder($max);

        foreach ($messwertReader->getData() as $messwertRow) {

            $container = new AdminItemContainer($this);

            /*$small = new AdminItemSmall($container);
            $small->content = $messwertRow->dateTime->dateTime->getTimeLeadingZero();*/

            $div = new AdminItemTitle($container);
            $div->content = $messwertRow->station->station;

            $div = new AdminItemLarge($container);
            $div->content = $messwertRow->getModelValue($max).'° C';  //;  $messwertRow->getTemperatureText();

            $small = new AdminItemSmall($container);
            $small->content = $messwertRow->station->geoCoordinate->altitude . ' m.ü.M.';

        }

        $footer = new Footer($this);

        new MeteoschweizSourceSmall($footer);

        return parent::getContent();
    }

}