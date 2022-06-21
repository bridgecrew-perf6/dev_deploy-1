<?php
namespace Parlament\Data\CrawlerLog;
class CrawlerLogValue extends \Nemundo\Model\Value\AbstractModelDataValue {
/**
* @var CrawlerLogModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CrawlerLogModel();
}
}