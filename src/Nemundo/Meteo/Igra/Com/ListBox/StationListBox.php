<?phpnamespace Nemundo\Meteo\Igra\Com\ListBox;use Nemundo\Meteo\Igra\Data\Country\CountryReader;use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;class StationListBox extends BootstrapListBox{    public function getContent()    {        $this->label='Station';        $reader=new CountryReader();        $reader->addOrder($reader->model->country);        foreach ($reader->getData() as $countryRow) {            $this->addItem($countryRow->id,$countryRow->country);        }        return parent::getContent();    }}