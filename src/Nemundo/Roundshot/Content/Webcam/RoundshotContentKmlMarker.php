<?phpnamespace Nemundo\Roundshot\Content\Webcam;use Nemundo\Com\Html\Hyperlink\UrlHyperlink;use Nemundo\Content\Index\Geo\Kml\ContentKmlMarker;use Nemundo\Core\Type\Text\Text;use Nemundo\Geo\Kml\Object\KmlMarker;use Nemundo\Html\Container\HtmlContainer;use Nemundo\Roundshot\Content\Roundshot\RoundshotWidgetContentType;use Nemundo\Roundshot\Kml\RoundshotStyle;class RoundshotContentKmlMarker extends ContentKmlMarker{    /**     * @var RoundshotWebcamContentType     */    public $content;    public function getContent()    {        $this->styleUrl=(new RoundshotStyle())->styleId;        $roundshotRow=$this->content->getDataRow();        //$titleText = (new Text($roundshotRow->roundshot))->replace('&', '')->getValue();        $titleText = $roundshotRow->roundshot;        //$description = new HtmlContainer();  // new HtmlContainerList();        //$title = new H3($description);        //$title->content = $titleText;        /*$link = new UrlHyperlink($description);        $link->url = $roundshotRow->url;        $link->content = $roundshotRow->roundshot;*/        //$point = new KmlMarker($this);  // new Placemark($this);  // $this);  // new KmlPlacemark($this);        $this->coordinate = $roundshotRow->geoCoordinate;        $this->label = $titleText;        $this->description = $this->content->getDefaultView()->getBodyContent();            //$description->getBodyContent();        return parent::getContent(); // TODO: Change the autogenerated stub    }}