<?phpnamespace Nemundo\Meteo\Isd\Site\Json;use Nemundo\Meteo\Isd\Data\Station\StationReader;use Nemundo\Package\Bootstrap\Autocomplete\AbstractAutocompleteJsonSite;class StationAutocompleteSite extends AbstractAutocompleteJsonSite{    /**     * @var StationAutocompleteSite     */    public static $site;    protected function loadSite()    {        $this->url='station-autocomplete';        StationAutocompleteSite::$site=$this;    }    protected function loadAutocompleteJson()    {        $reader=new StationReader();        $reader->filter->andContainsLeft($reader->model->station,$this->getKeyword());        //$reader->filter->andEqual($reader->model->active,true);        $reader->limit=10;        foreach ($reader->getData() as $stationRow) {            $this->addWord($stationRow->station);        }    }}