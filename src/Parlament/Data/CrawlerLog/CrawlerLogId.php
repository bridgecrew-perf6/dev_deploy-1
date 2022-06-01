<?php
namespace Parlament\Data\CrawlerLog;
use Nemundo\Model\Id\AbstractModelIdValue;
class CrawlerLogId extends AbstractModelIdValue {
/**
* @var CrawlerLogModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new CrawlerLogModel();
}
}