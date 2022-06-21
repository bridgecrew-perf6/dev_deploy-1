<?php
namespace Parlament\Data\Ratsmitglied;
class RatsmitgliedCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var RatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new RatsmitgliedModel();
}
}