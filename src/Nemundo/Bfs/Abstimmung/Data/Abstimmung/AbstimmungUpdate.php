<?php
namespace Nemundo\Bfs\Abstimmung\Data\Abstimmung;
use Nemundo\Model\Data\AbstractModelUpdate;
class AbstimmungUpdate extends AbstractModelUpdate {
/**
* @var AbstimmungModel
*/
public $model;

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
public function update() {
$this->typeValueList->setModelValue($this->model->abstimmungNumber, $this->abstimmungNumber);
$this->typeValueList->setModelValue($this->model->datumId, $this->datumId);
$this->typeValueList->setModelValue($this->model->abstimmung, $this->abstimmung);
parent::update();
}
}