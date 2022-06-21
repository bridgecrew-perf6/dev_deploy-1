<?php
namespace Parlament\Data\LastUpdate;
class LastUpdateCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var LastUpdateModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LastUpdateModel();
}
}