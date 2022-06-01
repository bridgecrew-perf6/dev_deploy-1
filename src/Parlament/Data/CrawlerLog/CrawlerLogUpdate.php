<?php
namespace Parlament\Data\CrawlerLog;
use Nemundo\Model\Data\AbstractModelUpdate;
class CrawlerLogUpdate extends AbstractModelUpdate {
/**
* @var CrawlerLogModel
*/
public $model;

/**
* @var string
*/
public $crawler;

/**
* @var int
*/
public $page;

/**
* @var bool
*/
public $finished;

public function __construct() {
parent::__construct();
$this->model = new CrawlerLogModel();
}
public function update() {
$this->typeValueList->setModelValue($this->model->crawler, $this->crawler);
$this->typeValueList->setModelValue($this->model->page, $this->page);
$this->typeValueList->setModelValue($this->model->finished, $this->finished);
parent::update();
}
}