<?php


namespace Nemundo\Meteoschweiz\Site\Json;


use Nemundo\Admin\Com\Table\AdminClickableTable;
use Nemundo\Admin\Com\Table\AdminTableHeader;
use Nemundo\Admin\Com\Table\Row\AdminClickableTableRow;
use Nemundo\Admin\Com\Table\Sorting\AdminUpdDownSortingHyperlink;
use Nemundo\Meteoschweiz\Data\Messwert\MesswertPaginationReader;
use Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationReader;
use Nemundo\Meteoschweiz\Parameter\StationParameter;
use Nemundo\Web\Site\AbstractJsonSite;


class MesswertJsonSite extends AbstractJsonSite
{


    protected function loadSite()
    {

        $this->url = 'messwert-json';

    }


    protected function loadJson()
    {


        $messwertReader = new MesswertPaginationReader();
        //$messwertReader->model->loadStation();
        $messwertReader->model->loadDateTime();
        //$messwertReader->filter->andEqual($messwertReader->model->hasTemperature,true);
        //$reader->addOrder($reader->model->temperature,SortOrder::DESCENDING);
        //$reader->addGroup($reader->model->stationId);
        //$reader->limit = 10;

        $stationParameter=new StationParameter();
        if ($stationParameter->hasValue()) {
            $messwertReader->filter->andEqual($messwertReader->model->stationId, (new StationParameter())->getValue());
        }

        $messwertReader->model->dateTime;

        foreach ($messwertReader->getData() as $messwertRow) {

            $data=[];
            $data['date_time']=$messwertRow->dateTime->dateTime->getShortDateTimeLeadingZeroFormat();
            $data['wind']= $messwertRow->wind;
            $data['temperature']= $messwertRow->temperature;


        }




    }

}