<?phpnamespace Nemundo\WebLog\Data\WebLog;class WebLog extends \Nemundo\Model\Data\AbstractModelData {/*** @var WebLogModel*/protected $model;/*** @var string*/public $url;/*** @var string*/public $ip;/*** @var string*/public $browserAgent;/*** @var string*/public $urlReferer;/*** @var string*/public $tracking;/*** @var float*/public $loadingTime;/*** @var string*/public $domain;/*** @var bool*/public $userLogged;/*** @var string*/public $userId;public function __construct() {parent::__construct();$this->model = new WebLogModel();}public function save() {$this->typeValueList->setModelValue($this->model->url, $this->url);$this->typeValueList->setModelValue($this->model->ip, $this->ip);$this->typeValueList->setModelValue($this->model->browserAgent, $this->browserAgent);$this->typeValueList->setModelValue($this->model->urlReferer, $this->urlReferer);$this->typeValueList->setModelValue($this->model->tracking, $this->tracking);if (!is_null($this->loadingTime)) $this->loadingTime = str_replace(",", ".", $this->loadingTime);$this->typeValueList->setModelValue($this->model->loadingTime, $this->loadingTime);$this->typeValueList->setModelValue($this->model->domain, $this->domain);$this->typeValueList->setModelValue($this->model->userLogged, $this->userLogged);$this->typeValueList->setModelValue($this->model->userId, $this->userId);$id = parent::save();return $id;}}