<?php
namespace Dev\App\Wetzikon\Data;
use Nemundo\Model\Collection\AbstractModelCollection;
class WetzikonModelCollection extends AbstractModelCollection {
protected function loadCollection() {
$this->addModel(new \Dev\App\Wetzikon\Data\Poi\PoiModel());
$this->addModel(new \Dev\App\Wetzikon\Data\PoiBild\PoiBildModel());
}
}