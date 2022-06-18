<?phpnamespace Nemundo\Content\App\File\Page;use Nemundo\Admin\Com\Table\AdminBootstrapTable;use Nemundo\Com\TableBuilder\TableRow;use Nemundo\Com\Template\AbstractTemplateDocument;use Nemundo\Content\App\File\Data\Video\VideoPaginationReader;use Nemundo\Content\App\File\Template\FileTemplate;use Nemundo\Html\Player\VideoPlayer;class VideoPage extends FileTemplate{    public function getContent()    {        $table=new AdminBootstrapTable($this);        $reader = new VideoPaginationReader();        foreach ($reader->getData() as $videoRow) {            $row=new TableRow($table);            $row->addText($videoRow->orginalFilename);            $video=new VideoPlayer($row);            $video->src=$videoRow->video->getUrl();        }        return parent::getContent();    }}