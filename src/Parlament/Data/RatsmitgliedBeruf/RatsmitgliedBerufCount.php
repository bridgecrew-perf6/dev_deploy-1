<?php
namespace Parlament\Data\RatsmitgliedBeruf;
class RatsmitgliedBerufCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var RatsmitgliedBerufModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedBerufModel();
}
}