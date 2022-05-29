<?phpnamespace Nemundo\Meteo\Eumetsat\Content\Latest;use Nemundo\Meteo\Eumetsat\Data\EumetsatLatest\EumetsatLatest;use Nemundo\Meteo\Eumetsat\Data\EumetsatLatest\EumetsatLatestReader;use Nemundo\Meteo\Eumetsat\Data\EumetsatLatest\EumetsatLatestRow;use Nemundo\Meteo\Eumetsat\Data\EumetsatLatest\EumetsatLatestUpdate;use Nemundo\Process\Content\Type\AbstractContentType;class EumetsatLatestContentType extends AbstractContentType{    public $regionId;    public $imageTypeId;    protected function loadContentType()    {        $this->typeLabel = 'Eumetsat';        $this->typeId = 'aec580ad-a04d-4cc8-b75d-4631aca4c159';        $this->formClassList[] = EumetsatLatestContentForm::class;        $this->viewClassList[]  = EumetsatLatestContentView::class;    }    protected function onCreate()    {        $data = new EumetsatLatest();        $data->regionId = $this->regionId;        $data->imageTypeId = $this->imageTypeId;        $this->dataId = $data->save();    }    protected function onUpdate()    {        $update = new EumetsatLatestUpdate();        $update->regionId = $this->regionId;        $update->imageTypeId = $this->imageTypeId;        $update->updateById($this->dataId);    }    protected function onDataRow()    {        $reader = new EumetsatLatestReader();        $reader->model->loadRegion();        $reader->model->loadImageType();        $this->dataRow = $reader->getRowById($this->dataId);    }    /**     * @return \Nemundo\Model\Row\AbstractModelDataRow|EumetsatLatestRow     */    public function getDataRow()    {        return parent::getDataRow();    }}