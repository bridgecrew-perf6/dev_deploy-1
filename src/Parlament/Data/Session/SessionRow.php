<?php
namespace Parlament\Data\Session;
class SessionRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var SessionModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $session;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $von;

/**
* @var \Nemundo\Core\Type\DateTime\Date
*/
public $bis;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->session = $this->getModelValue($model->session);
$value = $this->getModelValue($model->von);
if ($value !== "0000-00-00") {
$this->von = new \Nemundo\Core\Type\DateTime\Date($this->getModelValue($model->von));
}
$value = $this->getModelValue($model->bis);
if ($value !== "0000-00-00") {
$this->bis = new \Nemundo\Core\Type\DateTime\Date($this->getModelValue($model->bis));
}
}
}