<?phpnamespace Nemundo\Roundshot\Path;use Nemundo\Core\Type\DateTime\Date;use Nemundo\Roundshot\Data\Roundshot\RoundshotRow;class DayRoundshotCachePath extends RoundshotCachePath{    /**     * @var RoundshotRow     */    private $roundshotRow;    /**     * @var Date     */    private $date;    public function __construct(RoundshotRow $roundshotRow, Date $date)    {        $this->roundshotRow = $roundshotRow;        $this->date = $date;        parent::__construct();    }    protected function loadPath()    {        parent::loadPath();        //$timeText = (new Text($item->dateTime->getIsoTimePrefixZero()))->replace(':', '-')->getValue();        //$filename = (new RoundshotCachePath())        $this            ->addPath($this->roundshotRow->roundshotNumber)            ->addPath($this->date->getIsoDate());        //->createPath()        /*->addPath($timeText.'.jpg')        ->getFullFilename();*/    }}