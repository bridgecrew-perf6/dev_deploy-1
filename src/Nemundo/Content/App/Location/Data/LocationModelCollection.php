<?php
namespace Nemundo\Content\App\Location\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class LocationModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Nemundo\Content\App\Location\Data\Address\AddressModel());
$this->addModel(new \Nemundo\Content\App\Location\Data\Location\LocationModel());
$this->addModel(new \Nemundo\Content\App\Location\Data\Tracking\TrackingModel());
}
}