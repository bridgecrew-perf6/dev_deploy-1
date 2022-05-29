<?phpnamespace Nemundo\Content\Index\Search\Action;use Nemundo\Admin\Com\Table\AdminTable;use Nemundo\Com\TableBuilder\TableHeader;use Nemundo\Com\TableBuilder\TableRow;use Nemundo\Content\Action\AbstractActionView;use Nemundo\Content\Index\Search\Data\WordContentType\WordContentTypeReader;class SearchActionView extends AbstractActionView{    public function getContent()    {        $table = new AdminTable($this);        $reader = new WordContentTypeReader();        $reader->model->loadContentType();        $reader->addOrder($reader->model->word);        $reader->filter->andEqual($reader->model->contentTypeId, $this->content->typeId);        $header = new TableHeader($table);        $header->addText($reader->model->word->label);        foreach ($reader->getData() as $wordRow) {            $row = new TableRow($table);            $row->addText($wordRow->word);        }        return parent::getContent(); // TODO: Change the autogenerated stub    }}