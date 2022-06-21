<?php
namespace Parlament\Data\CrawlerLog;
class CrawlerLogBulk extends \Nemundo\Model\Data\AbstractModelDataBulk {
/**
* @var CrawlerLogModel
*/
protected $model;

/**
* @var int
*/
public $id;

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
public function save() {
$id = $this->id;
$this->typeValueList->setModelValue($this->model->id, $id);
$this->typeValueList->setModelValue($this->model->crawler, $this->crawler);
$this->typeValueList->setModelValue($this->model->page, $this->page);
$this->typeValueList->setModelValue($this->model->finished, $this->finished);
$id = parent::save();
return $id;
}
}