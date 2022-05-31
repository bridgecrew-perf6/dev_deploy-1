<?php
namespace Nemundo\Bfs\Abstimmung\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class AbstimmungModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Nemundo\Bfs\Abstimmung\Data\Abstimmung\AbstimmungModel());
$this->addModel(new \Nemundo\Bfs\Abstimmung\Data\Datum\DatumModel());
$this->addModel(new \Nemundo\Bfs\Abstimmung\Data\GeoLevel\GeoLevelModel());
$this->addModel(new \Nemundo\Bfs\Abstimmung\Data\Jahr\JahrModel());
$this->addModel(new \Nemundo\Bfs\Abstimmung\Data\Resultat\ResultatModel());
}
}