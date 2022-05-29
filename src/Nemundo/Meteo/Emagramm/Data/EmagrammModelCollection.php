<?php
namespace Nemundo\Meteo\Emagramm\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class EmagrammModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Nemundo\Meteo\Emagramm\Data\Emagramm\EmagrammModel());
$this->addModel(new \Nemundo\Meteo\Emagramm\Data\Location\LocationModel());
}
}