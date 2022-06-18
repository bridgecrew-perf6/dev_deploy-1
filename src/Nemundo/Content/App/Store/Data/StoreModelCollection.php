<?php
namespace Nemundo\Content\App\Store\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class StoreModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Nemundo\Content\App\Store\Data\LargeTextStore\LargeTextStoreModel());
$this->addModel(new \Nemundo\Content\App\Store\Data\NumberStore\NumberStoreModel());
$this->addModel(new \Nemundo\Content\App\Store\Data\Store\StoreModel());
$this->addModel(new \Nemundo\Content\App\Store\Data\TextStore\TextStoreModel());
}
}