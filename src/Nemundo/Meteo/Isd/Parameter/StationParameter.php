<?phpnamespace Nemundo\Meteo\Isd\Parameter;use Nemundo\Meteo\Isd\Data\Station\StationReader;use Nemundo\Web\Parameter\AbstractUrlParameter;class StationParameter extends AbstractUrlParameter{    protected function loadParameter()    {        $this->parameterName = 'station';    }    public function getStationRow() {        $stationRow = (new StationReader())->getRowById($this->getValue());        return $stationRow;    }}