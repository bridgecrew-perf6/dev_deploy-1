<?phpnamespace Nemundo\Meteo\Emagramm\Com\ListBox;use Nemundo\Meteo\Emagramm\Data\Location\LocationReader;use Nemundo\Package\Bootstrap\FormElement\BootstrapListBox;class LocationListBox extends BootstrapListBox{    public function getContent()    {        $this->label='Location';        $reader=new LocationReader();        foreach ($reader->getData() as $locationRow) {            $this->addItem($locationRow->id,$locationRow->location);        }        return parent::getContent(); // TODO: Change the autogenerated stub    }}