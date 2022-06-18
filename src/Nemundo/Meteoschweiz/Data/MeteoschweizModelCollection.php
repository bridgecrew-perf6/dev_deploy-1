<?php
namespace Nemundo\Meteoschweiz\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class MeteoschweizModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Nemundo\Meteoschweiz\Data\CmsMesswertStation\CmsMesswertStationModel());
$this->addModel(new \Nemundo\Meteoschweiz\Data\Messwert\MesswertModel());
$this->addModel(new \Nemundo\Meteoschweiz\Data\MesswertDateTime\MesswertDateTimeModel());
$this->addModel(new \Nemundo\Meteoschweiz\Data\MesswertStation\MesswertStationModel());
$this->addModel(new \Nemundo\Meteoschweiz\Data\StationDifference\StationDifferenceModel());
$this->addModel(new \Nemundo\Meteoschweiz\Data\TopListing\TopListingModel());
}
}