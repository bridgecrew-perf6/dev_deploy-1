<?phpnamespace Nemundo\Meteo\Sat24\Content\LatestSat24;use Nemundo\Content\View\AbstractContentView;use Nemundo\Package\Bootstrap\Image\BootstrapResponsiveImage;class LatestSat24ContentView extends AbstractContentView{    /**     * @var LatestSat24ContentType     */    public $contentType;    public function getContent()    {        $latestRow = $this->contentType->getDataRow();        $img=new BootstrapResponsiveImage($this);        $img->src='https://api.sat24.com/mostrecent/'.$latestRow->continent->url.'/'.$latestRow->imageType->url;//        $img->src='https://api.sat24.com/animated/'.$latestRow->continent->url.'/'.$latestRow->imageType->url;        return parent::getContent();    }}