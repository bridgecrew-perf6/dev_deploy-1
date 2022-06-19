<?phpnamespace Nemundo\Content\App\Text\Content\LargeText;use Nemundo\Content\App\Text\Data\LargeText\LargeText;use Nemundo\Content\App\Text\Data\LargeText\LargeTextReader;use Nemundo\Content\App\Text\Data\LargeText\LargeTextRow;use Nemundo\Content\App\Text\Data\LargeText\LargeTextUpdate;use Nemundo\Content\Index\File\ImageIndexTrait;use Nemundo\Content\Type\AbstractContentType;use Nemundo\Content\Type\AbstractSearchContentType;use Nemundo\Core\Type\Text\Html;use Nemundo\Core\Type\Text\Text;abstract class AbstractLargeTextContentType extends AbstractSearchContentType{    use ImageIndexTrait;    protected $subject;    protected $largeText;    protected $searchIndex = false;    protected function onCreate()    {        $data = new LargeText();        //$data->subject = $this->subject;        $data->largeText = $this->largeText;        $this->dataId = $data->save();    }    protected function onUpdate()    {        $update = new LargeTextUpdate();        //$update->subject = $this->subject;        $update->largeText = $this->largeText;        $update->updateById($this->dataId);    }    /*protected function onIndex()    {        $row = $this->getDataRow();        $this->addSearchText($row->subject);        $this->addSearchText($row->largeText);    }*/    protected function onDataRow()    {        $this->dataRow = (new LargeTextReader())->getRowById($this->dataId);    }    /**     * @return \Nemundo\Model\Row\AbstractModelDataRow|LargeTextRow     */    public function getDataRow()    {        return parent::getDataRow();    }    public function getData()    {        $data['id'] = $this->dataId;        $data['text'] = $this->getDataRow()->largeText;        $data['text_html'] = (new Html( $this->getDataRow()->largeText))->getValue();        return $data;    }    public function importJson($data)    {        $this->largeText = $data['text'];        $this->saveType();    }    public function getSubject()    {        $subject = (new Text($this->getDataRow()->largeText))->substring(0, 100)->getValue() . ' ...';        return $subject;    }    public function getImageUrl()    {        $url = '/asset/content_app/text/body-text.svg';        return $url;    }    public function getImageFilename()    {        // TODO: Implement getImageFilename() method.    }}