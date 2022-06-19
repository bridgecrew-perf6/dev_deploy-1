<?phpnamespace Nemundo\Roundshot\App\Container\Content\RoundshotContainer;use Nemundo\Content\Type\AbstractContentType;use Nemundo\Package\Bootstrap\FormElement\BootstrapTextBox;use Nemundo\Roundshot\App\Container\Data\RoundshotContainer\RoundshotContainer;use Nemundo\Roundshot\App\Container\Data\RoundshotContainer\RoundshotContainerReader;use Nemundo\Roundshot\App\Container\Data\RoundshotContainer\RoundshotContainerRow;class RoundshotContainerContentType extends AbstractContentType{    public $container;    protected function loadContentType()    {        $this->typeLabel = 'Roundshot Container';        $this->typeId = '1bfb9e4d-77ba-433a-9585-929a1080d188';        $this->formClassList[] = RoundshotContainerContentForm::class;        $this->viewClassList[] = RoundshotContainerContentView::class;    }    protected function onCreate()    {        $data=new RoundshotContainer();        $data->container=$this->container;        $this->dataId=$data->save();    }    protected function onUpdate()    {    }    protected function onDelete()    {    }    protected function onIndex()    {    }    protected function onDataRow()    {        $this->dataRow = (new RoundshotContainerReader())->getRowById($this->getDataId());    }    /**     * @return \Nemundo\Model\Row\AbstractModelDataRow|RoundshotContainerRow     */    public function getDataRow()    {        return parent::getDataRow();    }    public function getSubject()    {        return $this->getDataRow()->container;   // parent::getSubject(); // TODO: Change the autogenerated stub    }}