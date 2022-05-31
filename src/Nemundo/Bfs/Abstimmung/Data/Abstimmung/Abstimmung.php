<?php
namespace Nemundo\Bfs\Abstimmung\Data\Abstimmung;
class Abstimmung extends \Nemundo\Model\Data\AbstractModelData {
/**
* @var AbstimmungModel
*/
protected $model;

/**
* @var int
*/
public $abstimmungNumber;

/**
* @var string
*/
public $datumId;

/**
* @var string
*/
public $abstimmung;

public function __construct() {
parent::__construct();
$this->model = new AbstimmungModel();
}
public function save() {
$this->typeValueList->setModelValue($this->model->abstimmungNumber, $this->abstimmungNumber);
$this->typeValueList->setModelValue($this->model->datumId, $this->datumId);
$this->typeValueList->setModelValue($this->model->abstimmung, $this->abstimmung);
$id = parent::save();
return $id;
}
}