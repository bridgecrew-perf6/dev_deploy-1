<?php
namespace Parlament\Data\LastUpdate;
use Nemundo\Model\Id\AbstractModelIdValue;
class LastUpdateId extends AbstractModelIdValue {
/**
* @var LastUpdateModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new LastUpdateModel();
}
}