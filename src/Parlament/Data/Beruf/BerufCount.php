<?php
namespace Parlament\Data\Beruf;
class BerufCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var BerufModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new BerufModel();
}
}