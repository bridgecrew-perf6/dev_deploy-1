<?php
namespace Parlament\Data\Beruf;
class BerufDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var BerufModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new BerufModel();
}
}