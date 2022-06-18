<?phpnamespace Nemundo\Content\App\Share\Com\Table;use Nemundo\Admin\Com\Table\AdminClickableTable;use Nemundo\Admin\Com\Table\AdminTableHeader;use Nemundo\Admin\Com\Table\Row\AdminClickableTableRow;use Nemundo\Content\App\Explorer\Parameter\PrivateShareParameter;use Nemundo\Content\App\Share\Data\PrivateShare\PrivateShareCount;use Nemundo\Content\App\Share\Data\PrivateShare\PrivateShareReader;use Nemundo\Content\App\Share\Site\PrivateShareContentSite;use Nemundo\Content\App\Share\Site\PrivateShareDeleteSite;use Nemundo\Content\Parameter\ContentParameter;use Nemundo\Core\Type\Text\Html;use Nemundo\Html\Paragraph\Paragraph;use Nemundo\User\Session\UserSession;class PrivateShareTable extends AdminClickableTable{    public $contentId;    public function getContent()    {        //$table = new AdminClickableTable($this);        $reader = new PrivateShareReader();        $reader->model->loadContent();        $reader->model->loadUser();        $reader->filter->andEqual($reader->model->contentId, $this->contentId);        $header = new AdminTableHeader($this);        $header->addText($reader->model->user->label);        $header->addText($reader->model->message->label);        $header->addEmpty();        foreach ($reader->getData() as $privateShareRow) {            $row = new AdminClickableTableRow($this);            //$row->addText($privateShareRow->content->subject);            $row->addText($privateShareRow->user->login);            $row->addText((new Html($privateShareRow->message))->getValue());            $site=clone(PrivateShareDeleteSite::$site);            $site->addParameter(new PrivateShareParameter($privateShareRow->id));            $row->addIconSite($site);            /*            $site = clone(PrivateShareContentSite::$site);            $site->addParameter(new ContentParameter($privateShareRow->contentId));            $row->addClickableSite($site);*/        }        return parent::getContent(); // TODO: Change the autogenerated stub    }}