<?php
namespace Nemundo\Bfs\Gemeinde\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class GemeindeModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Nemundo\Bfs\Gemeinde\Data\Bezirk\BezirkModel());
$this->addModel(new \Nemundo\Bfs\Gemeinde\Data\Gemeinde\GemeindeModel());
$this->addModel(new \Nemundo\Bfs\Gemeinde\Data\Kanton\KantonModel());
}
}