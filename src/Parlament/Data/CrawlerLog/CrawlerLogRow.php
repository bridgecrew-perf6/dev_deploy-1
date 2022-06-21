<?php
namespace Parlament\Data\CrawlerLog;
class CrawlerLogRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var CrawlerLogModel
*/
public $model;

/**
* @var string
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

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->crawler = $this->getModelValue($model->crawler);
$this->page = intval($this->getModelValue($model->page));
$this->finished = boolval($this->getModelValue($model->finished));
}
}