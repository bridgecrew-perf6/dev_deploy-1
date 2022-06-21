<?php
namespace Parlament\Data\KommissionRatsmitglied;
class KommissionRatsmitgliedDelete extends \Nemundo\Model\Delete\AbstractModelDelete {
/**
* @var KommissionRatsmitgliedModel
*/
public $model;

public function __construct() {
parent::__construct();
$this->model = new KommissionRatsmitgliedModel();
}
}