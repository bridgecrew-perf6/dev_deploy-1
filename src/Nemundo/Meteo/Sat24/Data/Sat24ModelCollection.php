<?phpnamespace Nemundo\Meteo\Sat24\Data;use Nemundo\Model\Collection\AbstractModelCollection;class Sat24ModelCollection extends AbstractModelCollection {protected function loadCollection() {$this->addModel(new \Nemundo\Meteo\Sat24\Data\Continent\ContinentModel());$this->addModel(new \Nemundo\Meteo\Sat24\Data\ImageType\ImageTypeModel());$this->addModel(new \Nemundo\Meteo\Sat24\Data\LatestContent\LatestContentModel());}}