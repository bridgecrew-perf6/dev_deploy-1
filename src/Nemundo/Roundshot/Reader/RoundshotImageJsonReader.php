<?phpnamespace Nemundo\Roundshot\Reader;use Nemundo\Core\Base\DataSource\AbstractDataSource;use Nemundo\Core\Json\Reader\JsonReader;use Nemundo\Core\Type\DateTime\Date;use Nemundo\Core\Type\DateTime\DateTime;use Nemundo\Core\File\File;use Nemundo\Core\Type\Text\Text;use Nemundo\Core\WebRequest\WebRequest;use Nemundo\Roundshot\Data\Roundshot\RoundshotRow;use Nemundo\Roundshot\Path\RoundshotCachePath;class RoundshotImageJsonReader extends AbstractDataSource{    public $roundshotUrl;    /**     * @var Date     */    public $date;    protected function loadData()    {        $this->reverse=true;        $datumText = $this->date->getIsoDate();        $text = new Text();        $text->append($this->roundshotUrl);        $text->append('structure.json?days=0&to=');        $text->append($datumText);        $text->append('T23%3A59%3A59.999Z');        $url = $text->getValue();        $jsonReader = new JsonReader();        $jsonReader->fromUrl($url);        foreach ($jsonReader->getData()['images'] as $image) {            $item = new ImageItem();            $timestamp = $image['datetime'];            $item->dateTime = (new DateTime())->fromTimestamp($timestamp);            $item->imageUrl = $image['structure']['half']['url_full'];            $this->addItem($item);            /*            if ($this->downloadImage) {                $timeText = (new Text($dateTime->getIsoTime()))->replace(':', '_')->getValue();                $filename = (new RoundshotCachePath())                    ->addPath($this->roundshotRow->id)                    ->addPath($this->date->getIsoDateFormat())                    ->createPath()                    ->addPath($timeText . '.jpg')                    ->getFilename();                if ((new File($filename))->notExists()) {                    $webRequest = new WebRequest();                    $webRequest->downloadUrl($halfUrl, $filename);                }            }*/          /*  $data = new RoundshotImage();            $data->ignoreIfExists = true;            $data->roundshotId = $this->roundshotRow->id;            $data->date = $this->date;            $data->time = $dateTime->getTime();            $data->url = $halfUrl;            $data->save();*/        }    }    /**     * @return ImageItem[]     */    public function getData()    {        return parent::getData(); // TODO: Change the autogenerated stub    }}