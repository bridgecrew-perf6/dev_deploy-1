<?php
namespace Parlament\Data\CrawlerLog;
class CrawlerLogCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var CrawlerLogModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CrawlerLogModel();
}
}