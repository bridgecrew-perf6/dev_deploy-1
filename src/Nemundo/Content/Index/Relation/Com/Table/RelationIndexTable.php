<?phpnamespace Nemundo\Content\Index\Relation\Com\Table;use Nemundo\Admin\Com\Table\AdminClickableTable;use Nemundo\Admin\Com\Table\AdminTable;use Nemundo\Com\TableBuilder\TableRow;use Nemundo\Content\Com\Base\ContentTypeRedirectTrait;use Nemundo\Content\Index\Relation\Data\Relation\RelationReader;use Nemundo\Content\Parameter\ContentParameter;use Nemundo\Content\Type\AbstractContentType;use Nemundo\Package\Bootstrap\Table\BootstrapClickableTableRow;class RelationIndexTable extends AdminClickableTable{    use ContentTypeRedirectTrait;    /**     * @var AbstractContentType     */    //public $contentType;    public function getContent()    {        $reader = new RelationReader();        $reader->model->loadTo();        $reader->filter->andEqual($reader->model->fromId,$this->contentType->getContentId());        foreach ($reader->getData() as $relationRow) {            $row=new BootstrapClickableTableRow($this);            $row->addText($relationRow->to->subject);            // delete            $site = clone($this->redirectSite);            $site->addParameter(new ContentParameter($relationRow->toId));            $row->addClickableSite($site);        }        return parent::getContent(); // TODO: Change the autogenerated stub    }}