<?phpnamespace Nemundo\Meteo\Zamg\Page;use Nemundo\Com\Template\AbstractTemplateDocument;use Nemundo\Core\Type\DateTime\Date;use Nemundo\Meteo\Zamg\Data\Wetterkarte\WetterkarteReader;use Nemundo\Package\Bootstrap\Carousel\BootstrapImageCarousel;use Nemundo\Package\Bootstrap\Image\BootstrapResponsiveImage;class ZamgPage extends AbstractTemplateDocument{    public function getContent()    {        $dateFrom = new Date('2020-09-25');        $dateTo = new Date('2020-09-30');        //$img = new BootstrapImageCarousel($this);        //$img->slideEffect=false;        //$img->stopAtTheEnd=true;        $reader = new WetterkarteReader();        $reader->filter->andEqualOrGreater($reader->model->date,$dateFrom->getIsoDate());        $reader->filter->andEqualOrSmaller($reader->model->date,$dateTo->getIsoDate());        $reader->addOrder($reader->model->dateTime);        foreach ($reader->getData() as $wetterkarteRow) {            //$img->addImage($wetterkarteRow->image->getUrl());            $img=new BootstrapResponsiveImage($this);            $img->src= $wetterkarteRow->image->getUrl();        }        return parent::getContent();    }}