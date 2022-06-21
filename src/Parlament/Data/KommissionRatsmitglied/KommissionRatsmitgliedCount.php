<?php
namespace Parlament\Data\KommissionRatsmitglied;
class KommissionRatsmitgliedCount extends \Nemundo\Model\Count\AbstractModelDataCount {
/**
* @var KommissionRatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionRatsmitgliedModel();
}
}