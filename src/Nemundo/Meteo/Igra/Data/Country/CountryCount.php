<?phpnamespace Nemundo\Meteo\Igra\Data\Country;class CountryCount extends \Nemundo\Model\Count\AbstractModelDataCount {/*** @var CountryModel*/public $model;public function __construct() {parent::__construct();$this->model = new CountryModel();}}