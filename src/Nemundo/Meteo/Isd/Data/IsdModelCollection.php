<?php
namespace Nemundo\Meteo\Isd\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class IsdModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Nemundo\Meteo\Isd\Data\Country\CountryModel());
$this->addModel(new \Nemundo\Meteo\Isd\Data\DateContent\DateContentModel());
$this->addModel(new \Nemundo\Meteo\Isd\Data\DateContentStation\DateContentStationModel());
$this->addModel(new \Nemundo\Meteo\Isd\Data\DownloadQueue\DownloadQueueModel());
$this->addModel(new \Nemundo\Meteo\Isd\Data\Measurement\MeasurementModel());
$this->addModel(new \Nemundo\Meteo\Isd\Data\MeasurementDay\MeasurementDayModel());
$this->addModel(new \Nemundo\Meteo\Isd\Data\Station\StationModel());
}
}