<?phpnamespace Nemundo\WebLog\Data\Browser;class BrowserDelete extends \Nemundo\Model\Delete\AbstractModelDelete {/*** @var BrowserModel*/public $model;public function __construct() {parent::__construct();$this->model = new BrowserModel();}}