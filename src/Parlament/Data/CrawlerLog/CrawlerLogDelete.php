<?php
namespace Parlament\Data\CrawlerLog;
class CrawlerLogDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var CrawlerLogModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CrawlerLogModel();
}
}