<?phpnamespace Nemundo\Meteo\Eumetsat\Data;use Nemundo\Model\Collection\AbstractModelCollection;class EumetsatCollection extends AbstractModelCollection {protected function loadCollection() {$this->addModel(new \Nemundo\Meteo\Eumetsat\Data\EumetsatLatest\EumetsatLatestModel());$this->addModel(new \Nemundo\Meteo\Eumetsat\Data\ImageType\ImageTypeModel());$this->addModel(new \Nemundo\Meteo\Eumetsat\Data\Region\RegionModel());}}