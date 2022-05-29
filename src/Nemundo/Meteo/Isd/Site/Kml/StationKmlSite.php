<?phpnamespace Nemundo\Meteo\Isd\Site\Kml;use Nemundo\Geo\Kml\Document\KmlDocument;use Nemundo\Geo\Kml\Object\KmlMarker;use Nemundo\Geo\Kml\Site\AbstractKmlSite;use Nemundo\Html\Block\Br;use Nemundo\Meteo\Isd\Data\Station\StationReader;use Nemundo\Meteo\Isd\Parameter\ActiveParameter;use Nemundo\Meteo\Isd\Parameter\CountryParameter;class StationKmlSite extends AbstractKmlSite{    /**     * @var StationKmlSite     */    public static $site;    protected function loadSite()    {        $this->title = 'Station Kml';        $this->url = 'station-kml';        StationKmlSite::$site = $this;    }    public function loadContent()    {        $kml = new KmlDocument();        $kml->filename = 'weather-station.kml';        $reader = new StationReader();        $parameter = new ActiveParameter();        if ($parameter->hasValue()) {        //$reader->filter->andEqual($reader->model->active, true);            $reader->filter->andEqual($reader->model->active, $parameter->getValue());        }        $parameter = new CountryParameter();        if ($parameter->hasValue()) {            $reader->filter->andEqual($reader->model->countryId, $parameter->getValue());        }        foreach ($reader->getData() as $stationRow) {            /*$container=new StationContainer();            $container->stationRow=$stationRow;            $container->dateFrom = (new Date('2020-02-01'));            $container->dateTo = (new Date('2020-03-01'));*/            $label = $stationRow->station . ' - ' . $stationRow->stationCode;            $placemark = new KmlMarker($kml);            $placemark->coordinate = $stationRow->coordinate;            $placemark->label = $label;  // '';// $stationRow->station . ' - ' . $stationRow->stationCode;            $placemark->description = $stationRow->station . ' - ' . $stationRow->stationCode . (new Br())->getBodyContent() .                $stationRow->coordinate->altitude . ' m' . (new Br())->getBodyContent() .                $stationRow->validFrom->getShortDateLeadingZeroFormat() . ' - ' . $stationRow->validTo->getShortDateLeadingZeroFormat();        }        $kml->render();    }}