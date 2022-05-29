<?phpnamespace Nemundo\Meteo\Isd\Com\Form;use Nemundo\Core\Structure\ForLoop;use Nemundo\Meteo\Isd\Com\ListBox\CountryListBox;use Nemundo\Meteo\Isd\Com\ListBox\YearListBox;use Nemundo\Meteo\Isd\Data\DownloadQueue\DownloadQueue;use Nemundo\Meteo\Isd\Data\Station\StationReader;use Nemundo\Package\Bootstrap\Form\BootstrapForm;class CountryDownloadQueueForm extends BootstrapForm{    //public $countryId;    /**     * @var CountryListBox     */    private $country;    /**     * @var YearListBox     */    private $yearFrom;    /**     * @var YearListBox     */    private $yearTo;    public function getContent()    {        $this->country = new CountryListBox($this);        $this->country->validation = true;        $this->yearFrom = new YearListBox($this);        $this->yearFrom->label = 'From';        $this->yearFrom->validation = true;        $this->yearTo = new YearListBox($this);        $this->yearTo->label = 'To';        $this->yearTo->validation = true;        return parent::getContent();    }    protected function onSubmit()    {        $reader = new StationReader();        $reader->filter->andEqual($reader->model->countryId, $this->country->getValue());        $reader->filter->andEqual($reader->model->active, true);        foreach ($reader->getData() as $stationRow) {            $loop = new ForLoop();            $loop->minNumber = $this->yearFrom->getValue();            $loop->maxNumber = $this->yearTo->getValue();            foreach ($loop->getData() as $year) {                $data = new DownloadQueue();                $data->ignoreIfExists = true;                $data->stationId = $stationRow->id;                $data->year = $year;                $data->finished = false;                $data->save();            }        }    }}