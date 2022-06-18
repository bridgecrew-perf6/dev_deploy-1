<?phpnamespace Nemundo\Meteoschweiz\Reader\Station;use Nemundo\Core\Base\AbstractBase;use Nemundo\Core\Type\Geo\GeoCoordinateAltitude;use Nemundo\Core\Type\Text\Text;use Nemundo\Geo\Coordinate\Swiss\SwissCoordinateConverter;class StationItem extends AbstractBase{    public $station;    public $stationCode;    public $elevation;    public $globalCoordinate;    public $swissCoordinate;    public $swissCoordinateLat;    public $swissCoordinateLon;    public function getGeoCoordinate()    {        $text = new Text($this->swissCoordinate);        $textList = $text->split('/');        $swissCoordinate = new SwissCoordinateConverter();        $geoCoordinate = $swissCoordinate->getLatLon($textList[0], $textList[1]);        return $geoCoordinate;    }    public function getGeoCoordinateAltidude()    {        $coordinate = new GeoCoordinateAltitude();        $coordinate->fromGeoCoordinate($this->getGeoCoordinate());        $coordinate->altitude = $this->elevation;        return $coordinate;    }}