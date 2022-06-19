<?phpnamespace Nemundo\Roundshot\Content\Webcam;use Nemundo\Admin\Com\Table\AdminClickableTable;use Nemundo\Com\TableBuilder\TableHeader;use Nemundo\Content\Index\Search\Com\Form\ContentTypeQuerySearchForm;use Nemundo\Content\Index\Search\Reader\SearchItemReader;use Nemundo\Content\View\AbstractContentListing;use Nemundo\Package\Bootstrap\Pagination\BootstrapPagination;use Nemundo\Package\Bootstrap\Table\BootstrapClickableTableRow;use Nemundo\Roundshot\Data\Roundshot\RoundshotPaginationReader;class RoundshotWebcamContentListing extends AbstractContentListing{    public function getContent()    {        $form = new ContentTypeQuerySearchForm($this);        $form->contentType = new RoundshotWebcamContentType();        if ($form->hasValue()) {            $table = new AdminClickableTable($this);            $roundshotReader = new RoundshotPaginationReader();            $roundshotReader->addOrder($roundshotReader->model->roundshot);            $header = new TableHeader($table);            $header->addText($roundshotReader->model->roundshot->label);            $header->addText($roundshotReader->model->geoCoordinate->altitude->label);            $reader = new SearchItemReader();            $reader->query = $form->getSearchQuery();            $reader->addFilterContentType(new RoundshotWebcamContentType());            $reader->paginationLimit = 30;            foreach ($reader->getData() as $searchItem) {                $contentType = new RoundshotWebcamContentType($searchItem->dataId);                $roundshotRow = $contentType->getDataRow();                $row = new BootstrapClickableTableRow($table);                $row->addText($roundshotRow->roundshot);                $row->addText($roundshotRow->geoCoordinate->altitude);                $row->addClickableSite($this->getContentRedirectSite($contentType->getContentId()));            }            $pagination = new BootstrapPagination($this);            $pagination->paginationReader = $roundshotReader;        } else {            $table = new AdminClickableTable($this);            $roundshotReader = new RoundshotPaginationReader();            $roundshotReader->addOrder($roundshotReader->model->roundshot);            $header = new TableHeader($table);            $header->addText($roundshotReader->model->roundshot->label);            $header->addText($roundshotReader->model->geoCoordinate->altitude->label);            foreach ($roundshotReader->getData() as $roundshotRow) {                $row = new BootstrapClickableTableRow($table);                $row->addText($roundshotRow->roundshot);                $row->addText($roundshotRow->geoCoordinate->altitude);                $contentType = new RoundshotWebcamContentType($roundshotRow->id);                $row->addClickableSite($this->getContentRedirectSite($contentType->getContentId()));            }            $pagination = new BootstrapPagination($this);            $pagination->paginationReader = $roundshotReader;        }        return parent::getContent();    }}