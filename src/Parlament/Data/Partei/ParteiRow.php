<?php
namespace Parlament\Data\Partei;
class ParteiRow extends \Nemundo\Model\Row\AbstractModelDataRow {
/**
* @var \Nemundo\Model\Row\AbstractModelDataRow
*/
private $row;

/**
* @var ParteiModel
*/
public $model;

/**
* @var string
*/
public $id;

/**
* @var string
*/
public $abkuerzung;

/**
* @var string
*/
public $partei;

public function __construct(\Nemundo\Db\Row\AbstractDataRow $row, $model) {
parent::__construct($row->getData());
$this->row = $row;
$this->id = $this->getModelValue($model->id);
$this->abkuerzung = $this->getModelValue($model->abkuerzung);
$this->partei = $this->getModelValue($model->partei);
}
}