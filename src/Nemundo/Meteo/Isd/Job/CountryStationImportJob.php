<?phpnamespace Nemundo\Meteo\Isd\Job;use Nemundo\Content\App\Job\Content\AbstractJobContentType;use Nemundo\Meteo\Isd\Application\IsdApplication;use Nemundo\Meteo\Isd\Import\CountryImport;use Nemundo\Meteo\Isd\Import\StationImport;class CountryStationImportJob extends AbstractJobContentType{    protected function loadContentType()    {        $this->typeLabel = 'Country Station Import';        $this->typeId='d22b22b1-99c9-403f-b33b-ce02c8da6752';        //$this->application = new IsdApplication();    }    public function run()    {        (new CountryImport())->importData();        (new StationImport())->importData();    }}