<?php
namespace Parlament\Data\LastUpdate;
class LastUpdateDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var LastUpdateModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LastUpdateModel();
}
}