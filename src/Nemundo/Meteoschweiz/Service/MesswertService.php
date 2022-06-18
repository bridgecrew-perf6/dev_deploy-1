<?php


namespace Nemundo\Meteoschweiz\Service;


use Nemundo\App\WebService\Service\AbstractListServiceRequest;
use Nemundo\Core\Http\Request\HttpRequest;
use Nemundo\Db\Sql\Order\SortOrder;
use Nemundo\Meteoschweiz\Data\Messwert\MesswertReader;

class MesswertService extends AbstractListServiceRequest
{

    protected function loadService()
    {
        $this->serviceName = 'meteoschweiz-messwert';
    }


    public function onRequest()
    {

        $stationId = (new HttpRequest('station'))->getValue();

        $reader = new MesswertReader();
        $reader->model->loadDateTime();
        $reader->filter->andEqual($reader->model->stationId, $stationId);

        /* if ($this->dateFrom!==null) {
             $reader->filter->andEqualOrGreater($reader->model->dateTime->dateTime, $this->dateFrom->getIsoDateTime());
         }
         if ($this->dateTo!==null) {
             $reader->filter->andEqualOrSmaller($reader->model->dateTime->dateTime, $this->dateTo->getIsoDateTime());
         }*/

        $reader->limit = $this->getPaginationLimit();
        //$reader->addOrder($reader->model->id,SortOrder::DESCENDING);
        $reader->addOrder($reader->model->id,SortOrder::ASCENDING);

        foreach ($reader->getData() as $messwertRow) {

            $data = [];
            $data['temperature'] = $messwertRow->temperature;
            $data['temperature_text'] = $messwertRow->getTemperatureText();
            $data['qnh'] = $messwertRow->qnh;
            $data['pressure_text'] = $messwertRow->getPressureText();
            $data['wind'] = $messwertRow->wind;
            $data['wind_direction'] = $messwertRow->windDirection;
            $data['wind_gust'] = $messwertRow->windGust;
            $data['wind_text'] = $messwertRow->getWindText();

            $this->addRow($data);

        }

    }

}